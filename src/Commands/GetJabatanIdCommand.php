<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetJabatanIdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-jabatan-id
                            {id : idRiwayatJabatan}
                            {--model : Output from model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /jabatan/id/{idRiwayatJabatan} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = $this->argument('id');
        $paths = [
            'idRiwayatJabatan' => $id,
        ];

        $this->info(json_encode(
            Simpeg::getJabatanId($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
