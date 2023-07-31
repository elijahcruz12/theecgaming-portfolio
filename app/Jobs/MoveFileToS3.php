<?php

namespace App\Jobs;

use App\Models\Upload;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class MoveFileToS3 implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public Upload $upload)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $path = $this->upload->file_path;

        $stream = Storage::disk('local');

        $complete = Storage::disk('s3')->put($path, $stream->readStream($this->upload->file_path), 'public');

        if($complete){
            $this->upload->is_finished_processing = true;
            $this->upload->save();
        }
        else{
            throw new \Exception('Failed to upload file to S3');
        }
    }
}
