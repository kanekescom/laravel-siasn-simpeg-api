<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;
use Kanekescom\Siasn\Api\Simpeg\Models\RiwayatJabatan;

class GetRiwayatJabatan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-rw-jabatan
                            {nipBaru : NIP Baru}
                            {--model : Output from model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consume /pns/rw-jabatan/{nipBaru} endpoint on SIASN SIMPEG API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->option('model')) {
            $data = (new RiwayatJabatan($this->argument('nipBaru')))->all();
        } else {
            $data = Simpeg::getRiwayatJabatan($this->argument('nipBaru'))->object();
        }

        $this->info(json_encode($data, JSON_PRETTY_PRINT));
    }
}
