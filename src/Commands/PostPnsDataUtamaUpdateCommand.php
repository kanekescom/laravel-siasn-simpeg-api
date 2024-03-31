<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Exceptions\InvalidJsonException;
use Kanekescom\Siasn\Simpeg\Api\Pns;

class PostPnsDataUtamaUpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-pns-data-utama-update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /pns/data-utama-update endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->components->warn('This action can change the data on SIASN BKN.');
        $this->comment('{"agama_id":"string","alamat":"string","email":"string","email_gov":"string","kabupaten_id":"string","karis_karsu":"string","kelas_jabatan":"string","kpkn_id":"string","lokasi_kerja_id":"string","nomor_bpjs":"string","nomor_hp":"string","nomor_telpon":"string","npwp_nomor":"string","npwp_tanggal":"string","pns_orang_id":"string","tanggal_taspen":"string","tapera_nomor":"string","taspen_nomor":"string"}');

        $query = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        if (! is_array($query)) {
            throw new InvalidJsonException;

            return self::FAILURE;
        }

        $start = now();

        $this->info(json_encode(
            Pns::updateDataUtama([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
