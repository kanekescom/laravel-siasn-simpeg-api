<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Exceptions\InvalidJsonException;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class PostSkpSaveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-skp-save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /skp/save endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->line('<bg=yellow> BE CAREFUL! </> This action can change the data on SIASN BKN.');
        $this->newLine();
        $this->comment('{"atasanPejabatPenilai":"string","atasanPenilaiGolongan":"string","atasanPenilaiJabatan":"string","atasanPenilaiNama":"string","atasanPenilaiNipNrp":"string","atasanPenilaiTmtGolongan":"string","atasanPenilaiUnorNama":"string","disiplin":0,"id":"string","integritas":0,"jenisJabatan":"string","jumlah":0,"kepemimpinan":0,"kerjasama":0,"komitmen":0,"nilaiPerilakuKerja":0,"nilaiPrestasiKerja":0,"nilaiSkp":0,"nilairatarata":0,"orientasiPelayanan":0,"pejabatPenilai":"string","penilaiGolongan":"string","penilaiJabatan":"string","penilaiNama":"string","penilaiNipNrp":"string","penilaiTmtGolongan":"string","penilaiUnorNama":"string","pnsDinilaiOrang":"string","pnsUserId":"string","statusAtasanPenilai":"string","statusPenilai":"string","tahun":0}');

        $query = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        if (! is_array($query)) {
            throw new InvalidJsonException;

            return self::FAILURE;
        }

        $this->info(json_encode(
            Simpeg::postSkpSave([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
