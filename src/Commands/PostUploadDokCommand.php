<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class PostUploadDokCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-upload-dok';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /upload-dok endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->comment('{"id_ref_dokumen":0,"file":"string"}');

        $query = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        $this->info(json_encode(
            Simpeg::postUploadDok([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}