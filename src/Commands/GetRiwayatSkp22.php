<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;
use Kanekescom\Siasn\Api\Simpeg\Models\RiwayatSkp22;

class GetRiwayatSkp22 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-rw-skp22
                            {nipBaru : NIP Baru}
                            {--model : Output from model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consume /pns/rw-skp22/{nipBaru} endpoint on SIASN SIMPEG API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->option('model')) {
            $data = (new RiwayatSkp22($this->argument('nipBaru')))->all();
        } else {
            $data = Simpeg::getRiwayatSkp22($this->argument('nipBaru'))->object();
        }

        $this->info(json_encode($data, JSON_PRETTY_PRINT));
    }
}
