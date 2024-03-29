<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pengadaan;

class GetPengadaanListPengadaanInstansiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-pengadaan-list-pengadaan-instansi
                            {tahun : tahun}';

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
        $start = now();
        $tahun = $this->argument('tahun');
        $query = [
            'tahun' => $tahun,
        ];

        $this->info(json_encode(
            Pengadaan::getList([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
