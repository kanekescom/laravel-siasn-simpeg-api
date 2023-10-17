<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetDiklatIdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-diklat-id
                            {id : idRiwayatDiklat}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /diklat/id/{idRiwayatDiklat} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = $this->argument('id');
        $paths = [
            'idRiwayatDiklat' => $id,
        ];

        $this->info(json_encode(
            Simpeg::getDiklatId($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
