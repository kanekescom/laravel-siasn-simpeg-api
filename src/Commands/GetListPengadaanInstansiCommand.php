<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetListPengadaanInstansiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-list-pengadaan-instansi
                            {tahun : Tahun}
                            {--model : Output from model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /pengadaan/list-pengadaan-instansi endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tahun = $this->argument('tahun');
        $queries = [
            'tahun' => $tahun,
        ];

        $this->info(json_encode(
            Simpeg::getListPengadaanInstansi([], $queries)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
