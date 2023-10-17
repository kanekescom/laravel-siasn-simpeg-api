<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
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
        $this->comment('{"filePath":"string"}');

        $queries = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        $this->info(json_encode(
            Simpeg::getDownloadDok([], $queries)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
