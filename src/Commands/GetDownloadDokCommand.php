<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Kanekescom\Siasn\Api\Simpeg\Exceptions\InvalidFilePathException;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetDownloadDokCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-download-dok';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /download-dok endpoint';

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

        $response = Simpeg::getDownloadDok([], $query);
        $content = $response->getBody()->getContents();

        if ($content == null) {
            $this->components->error('Content not found');

            return self::FAILURE;
        }

        $filename = 'siasn-simpeg/'.$query['filePath'];

        Storage::disk('local')->put($filename, $content);

        $filepath = Storage::disk('local')->path($filename);

        $this->components->info("Downloaded to {$filepath}");

        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
