<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetListPensiunInstansiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-list-pensiun-instansi
                            {tglAwal : Tanggal awal}
                            {tglAkhir : Tanggal akhir}
                            {--model : Output from model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /pns/list-pensiun-instansi endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tglAwal = $this->argument('tglAwal');
        $tglAkhir = $this->argument('tglAkhir');
        $queries = [
            'tglAwal' => $tglAwal,
            'tglAkhir' => $tglAkhir,
        ];

        $this->info(json_encode(
            Simpeg::getListPensiunInstansi([], $queries)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
