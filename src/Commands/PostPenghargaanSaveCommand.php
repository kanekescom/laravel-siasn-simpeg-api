<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class PostPenghargaanSaveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-penghargaan-save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /penghargaan/save endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->comment('{"hargaId":"string","id":"string","path":[{"dok_id":"string","dok_nama":"string","dok_uri":"string","object":"string","slug":"string"}],"pnsOrangId":"string","skDate":"string","skNomor":"string","tahun":0}');

        $queries = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        $this->info(json_encode(
            Simpeg::postPenghargaanSave([], $queries)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
