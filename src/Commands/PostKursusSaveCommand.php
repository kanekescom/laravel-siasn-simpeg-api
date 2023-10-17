<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class PostKursusSaveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-kursus-save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /kursus/id/{idRiwayatKursus} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->comment('{"id":"string","instansiId":"string","institusiPenyelenggara":"string","jenisDiklatId":"string","jenisKursus":"string","jenisKursusSertipikat":"string","jumlahJam":0,"lokasiId":"string","namaKursus":"string","nomorSertipikat":"string","path":[{"dok_id":"string","dok_nama":"string","dok_uri":"string","object":"string","slug":"string"}],"pnsOrangId":"string","tahunKursus":0,"tanggalKursus":"string","tanggalSelesaiKursus":"string"}');

        $query = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        $this->info(json_encode(
            Simpeg::postKursusSave([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
