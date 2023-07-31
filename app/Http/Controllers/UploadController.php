<?php

namespace App\Http\Controllers;

use App\Jobs\CombineUploadedChunks;
use App\Jobs\MoveFileToS3;
use App\Models\Upload;
use Aws\S3\ObjectUploader;
use Aws\S3\S3Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\Flysystem\AwsS3V3\AwsS3V3Adapter;
use League\Flysystem\Filesystem;
use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class UploadController extends Controller
{
    public function index()
    {
        $uploads = Upload::all();

        return view('admin.upload.index', [
            'uploads' => $uploads
        ]);
    }

    public function create()
    {
        $upload = new Upload();
        $upload->token = Str::random(16);
        $upload->save();

        return view('admin.upload.create',
        [
            'token' => $upload->token
        ]);
    }

    public function store(Request $request, FileReceiver $receiver)
    {
        // We need to make sure that the request has a token, file, and a file_type
        // Token and file_type are query
        $token = $request->get('token');
        $file_type = $request->get('file_type');
        $file_name = $request->get('resumableFilename');
        $file_size = $request->get('resumableTotalSize');
        $file_part = $request->get('resumableChunkNumber');
        $file_total_parts = $request->get('resumableTotalChunks');

        // Check if this chunk is the last one (chunks start at 1)
        $is_last_chunk = (bool) ($file_part == $file_total_parts);

        if($token == null || $file_type == null)
        {
            return response()->json([
                'message' => 'Missing token or file_type'
            ], 400);
        }

        $upload = Upload::where('token', $token)->firstOrFail();

        if($upload->file_type === null){
            $upload->file_type = $file_type;
        }

        if($upload->file_path === null){
            // Get the file extension from the $file_name
            $extension = pathinfo($file_name, PATHINFO_EXTENSION);

            $upload->file_path = $file_type .  '/' . Str::slug(Str::random(16) . '-' . time()) . '.' . $extension;
        }

        if($upload->total_chunks === null){
            $upload->total_chunks = $file_total_parts;
        }

        $upload->save();

        if($receiver->isUploaded() === false){
            throw new UploadMissingFileException();
        }

        $save = $receiver->receive();

        if($save->isFinished()){
            $upload->is_finished_uploading = true;
            $upload->save();

            $disk = Storage::disk('local');

            $success = $disk->put($upload->file_path, fopen($save->getFile(), 'r+'));

            MoveFileToS3::dispatch($upload);

            if(!$success){
                return response()->json([
                    'error' => true,
                    'message' => 'Could not upload.'
                ], 500);
            }

            return response()->json([
                'success'
            ]);
        }

        $handler = $save->handler();

        return response()->json([
            "done" => $handler->getPercentageDone(),
        ]);
    }
}
