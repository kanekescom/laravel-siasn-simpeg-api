<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pemberhentian;

class GetPnsListPensiunInstansiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-pns-list-pensiun-instansi
                            {tglAwal : tglAwal}
                            {tglAkhir : tglAkhir}';

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
        $start = now();
        $tglAwal = $this->argument('tglAwal');
        $tglAkhir = $this->argument('tglAkhir');
        $query = [
            'tglAwal' => $tglAwal,
            'tglAkhir' => $tglAkhir,
        ];

        $this->info(json_encode(
            Pemberhentian::getListPensiunInstansi([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
