<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Exceptions\InvalidJsonException;
use Kanekescom\Siasn\Simpeg\Api\Hukdis;

class PostHukdisSaveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-hukdis-save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /hukdis/save endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->components->warn('This action can change the data on SIASN BKN.');
        $this->comment('{"akhirHukumanTanggal":"string","alasanHukumanDisiplinId":"string","golonganId":"string","golonganLama":"string","hukdisYangDiberhentikanId":"string","hukumanTanggal":"string","id":"string","jenisHukumanId":"string","jenisTingkatHukumanId":"string","kedudukanHukumId":"string","keterangan":"string","masaBulan":"string","masaTahun":"string","nomorPp":"string","path":[{"dok_id":"string","dok_nama":"string","dok_uri":"string","object":"string","slug":"string"}],"pnsOrangId":"string","skNomor":"string","skPembatalanNomor":"string","skPembatalanTanggal":"string","skTanggal":"string"}');

        $query = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        if (! is_array($query)) {
            throw new InvalidJsonException;

            return self::FAILURE;
        }

        $start = now();

        $this->info(json_encode(
            Hukdis::save([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
