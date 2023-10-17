<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class PostJabatanSaveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-jabatan-save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /jabatan/save endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->comment('{"eselonId":"string","id":"string","instansiId":"string","jabatanFungsionalId":"string","jabatanFungsionalUmumId":"string","jenisJabatan":"string","nomorSk":"string","path":[{"dok_id":"string","dok_nama":"string","dok_uri":"string","object":"string","slug":"string"}],"pnsId":"string","satuanKerjaId":"string","tanggalSk":"string","tmtJabatan":"string","tmtPelantikan":"string","unorId":"string"}');

        $queries = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        $this->info(json_encode(
            Simpeg::postJabatanSave([], $queries)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
