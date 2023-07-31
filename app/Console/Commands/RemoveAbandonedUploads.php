<?php

namespace App\Console\Commands;

use App\Models\Upload;
use Illuminate\Console\Command;

class RemoveAbandonedUploads extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'uploads:remove-abandoned {--time=5 : The time in minutes that the upload has been abandoned}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $time = $this->option('time');

        $this->info("Removing abandoned uploads older than {$time} minutes...");

        $abandonedUploads = Upload::where('created_at', '<', now()->subMinutes($time))->where('is_finished_uploading', false)->get();

        if($abandonedUploads->count() == 0) {
            $this->info('No abandoned uploads found.');
            return;
        }

        $this->info("Found {$abandonedUploads->count()} abandoned uploads.");

        $abandonedUploads->each(function ($upload) {
            $this->info("Removing upload {$upload->id}...");
            $upload->delete();
        });

        $this->info('Done!');
    }
}
