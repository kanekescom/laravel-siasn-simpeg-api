<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class PostUploadDokSkKpCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-upload-dok-sk-kp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /upload-dok-sk-kp endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->comment('{"id_usulan":"string","no_sk":"string","tgl_sk":"string","file":"string"}');

        $queries = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        $this->info(json_encode(
            Simpeg::postUploadDokSkKp([], $queries)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
