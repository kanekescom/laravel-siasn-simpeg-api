<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class PostUploadDokRwCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-upload-dok-rw';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /upload-dok-rw endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->comment('{"id_riwayat":"string","id_ref_dokumen":0,"file":"string"}');

        $queries = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        $this->info(json_encode(
            Simpeg::postUploadDokRw([], $queries)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
