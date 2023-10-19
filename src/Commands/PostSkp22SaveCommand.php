<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Exceptions\InvalidJsonException;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class PostSkp22SaveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-skp22-save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /skp22/save endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->line('<bg=yellow> BE CAREFUL! </> This action can change the data on SIASN BKN.');
        $this->newLine();
        $this->comment('{"hasilKinerjaNilai":0,"id":"string","kuadranKinerjaNilai":0,"path":[{"dok_id":"string","dok_nama":"string","dok_uri":"string","object":"string","slug":"string"}],"penilaiGolongan":"string","penilaiJabatan":"string","penilaiNama":"string","penilaiNipNrp":"string","penilaiUnorNama":"string","perilakuKerjaNilai":0,"pnsDinilaiOrang":"string","statusPenilai":"string","tahun":0}');

        $query = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        if (! is_array($query)) {
            throw new InvalidJsonException;

            return self::FAILURE;
        }

        $this->info(json_encode(
            Simpeg::postSkp22Save([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
