<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Exceptions\InvalidFilePathException;
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Upload;

class DownloadDownloadDokCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:download-download-dok';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /download-dok endpoint and save into local disk';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $query = ['filePath' => $this->ask('Write down file path')];

        if (blank($query)) {
            throw new InvalidFilePathException;

            return self::FAILURE;
        }

        $filepath = Upload::downloadDok([], $query);

        $this->components->info("Downloaded to {$filepath}");

        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
