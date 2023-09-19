<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;
use Kanekescom\Siasn\Api\Simpeg\Models\ListPengadaan;

class GetListPengadaan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-list-pengadaan
                            {tahun : tahun}
                            {--model : Output from model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consume /pengadaan/list-pengadaan-instansi endpoint on SIASN SIMPEG API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->option('model')) {
            $data = (new ListPengadaan($this->argument('tahun')))->all();
        } else {
            $data = Simpeg::getListPengadaan($this->argument('tahun'))->object();
        }

        $this->info(json_encode($data, JSON_PRETTY_PRINT));
    }
}
