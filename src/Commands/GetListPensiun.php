<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetListPensiun extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-list-pensiun
                            {tglAwal : tanggal awal}
                            {tglAkhir? : tanggal akhir}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consume /pns/list-pensiun-instansi endpoint on SIASN SIMPEG API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info(json_encode(Simpeg::getListPensiun($this->argument('tglAwal'), $this->argument('tglAkhir'))->object(), JSON_PRETTY_PRINT));
    }
}
