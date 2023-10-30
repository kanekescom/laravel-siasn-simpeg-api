<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Exceptions\InvalidJsonException;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class PostSkp2021SaveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-skp2021-save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /skp/2021/save endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->components->warn('This action can change the data on SIASN BKN.');
        $this->comment('{"atasanPejabatPenilai":"string","atasanPenilaiGolongan":"string","atasanPenilaiJabatan":"string","atasanPenilaiNama":"string","atasanPenilaiNipNrp":"string","atasanPenilaiTmtGolongan":"string","atasanPenilaiUnorNama":"string","disiplin":0,"id":"string","inisiatifKerja":0,"integritas":0,"jenisJabatan":"string","jenisPeraturanKinerjaKd":"string","jumlah":0,"kepemimpinan":0,"kerjasama":0,"komitmen":0,"konversiNilai":0,"nilaiIntegrasi":0,"nilaiPerilakuKerja":0,"nilaiPrestasiKerja":0,"nilaiSkp":0,"nilairatarata":0,"orientasiPelayanan":0,"pejabatPenilai":"string","penilaiGolongan":"string","penilaiJabatan":"string","penilaiNama":"string","penilaiNipNrp":"string","penilaiTmtGolongan":"string","penilaiUnorNama":"string","pnsDinilaiOrang":"string","statusAtasanPenilai":"string","statusPenilai":"string","tahun":0}');

        $query = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        if (! is_array($query)) {
            throw new InvalidJsonException;

            return self::FAILURE;
        }

        $start = now();

        $this->info(json_encode(
            Simpeg::postSkp2021Save([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
