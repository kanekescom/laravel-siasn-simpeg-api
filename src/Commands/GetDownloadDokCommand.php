<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Exceptions\InvalidJsonException;
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
        $this->comment('{"filePath":"string"}');

        $query = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        if (! is_array($query)) {
            throw new InvalidJsonException;

            return self::FAILURE;
        }

        $start = now();

        $this->info(json_encode(
            Simpeg::getDownloadDok([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
