<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Exceptions\InvalidJsonException;
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Cpns;

class PostCpnsSaveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-cpns-save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /cpns/save endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->components->warn('This action can change the data on SIASN BKN.');
        $this->comment('{"id":"string","kartu_pegawai":"string","nama_jabatan_angkat_cpns":"string","nomor_dokter_pns":"string","nomor_sk_cpns":"string","nomor_sk_pns":"string","nomor_spmt":"string","nomor_sttpl":"string","path":[{"dok_id":"string","dok_nama":"string","dok_uri":"string","object":"string","slug":"string"}],"pertek_cpns_pns_l2th_nomor":"string","pertek_cpns_pns_l2th_tanggal":"string","pns_orang_id":"string","status_cpns_pns":"string","tanggal_dokter_pns":"string","tgl_sk_cpns":"string","tgl_sk_pns":"string","tgl_sttpl":"string","tmt_pns":"string"}');

        $query = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        if (! is_array($query)) {
            throw new InvalidJsonException;

            return self::FAILURE;
        }

        $start = now();

        $this->info(json_encode(
            Cpns::postSave([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
