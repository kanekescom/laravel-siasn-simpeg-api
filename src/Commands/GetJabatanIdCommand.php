<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;

class GetJabatanIdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-jabatan-id
                            {id : idRiwayatJabatan}';

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
        $start = now();
        $id = $this->argument('id');
        $paths = [
            'idRiwayatJabatan' => $id,
        ];

        $this->info(json_encode(
            Simpeg::getJabatanId($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
