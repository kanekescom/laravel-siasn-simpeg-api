<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Exceptions\InvalidJsonException;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class PostKinerjaperiodikSaveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-kinerjaperiodik-save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /kinerjaperiodik/save endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->components->warn('This action can change the data on SIASN BKN.');
        $this->comment('{"bulanMulaiPenilaian":0,"bulanSelesaiPenilaian":0,"hasilKinerjaNilai":0,"id":"string","koefisienId":"string","kuadranKinerjaNilai":0,"path":[{"dok_id":"string","dok_nama":"string","dok_uri":"string","object":"string","slug":"string"}],"penilaiGolongan":"string","penilaiJabatanNama":"string","penilaiNama":"string","penilaiNipNrp":"string","penilaiUnorNama":"string","perilakuKerjaNilai":0,"periodikId":"string","pnsDinilaiId":"string","statusPenilai":"string","tahun":0,"tahunMulaiPenilaian":0,"tahunSelesaiPenilaian":0}');

        $query = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        if (! is_array($query)) {
            throw new InvalidJsonException;

            return self::FAILURE;
        }

        $start = now();

        $this->info(json_encode(
            Simpeg::postKinerjaperiodikSave([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
