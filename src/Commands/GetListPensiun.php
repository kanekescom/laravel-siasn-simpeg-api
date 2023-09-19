<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;
use Kanekescom\Siasn\Api\Simpeg\Models\ListPensiun;

class GetListPensiun extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-list-pensiun
                            {tglAwal : tanggal awal}
                            {tglAkhir? : tanggal akhir}
                            {--model : Output from model}';

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
        if ($this->option('model')) {
            $data = (new ListPensiun($this->argument('tglAwal'), $this->argument('tglAkhir')))->all();
        } else {
            $data = Simpeg::getListPensiun($this->argument('tglAwal'), $this->argument('tglAkhir'))->object();
        }

        $this->info(json_encode($data, JSON_PRETTY_PRINT));
    }
}
