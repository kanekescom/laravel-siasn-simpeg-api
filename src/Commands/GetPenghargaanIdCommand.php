<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetPenghargaanIdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-penghargaan-id
                            {id : idRiwayatPenghargaan}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /penghargaan/id/{idRiwayatPenghargaan} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = $this->argument('id');
        $paths = [
            'idRiwayatPenghargaan' => $id,
        ];

        $this->info(json_encode(
            Simpeg::getPenghargaanId($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
