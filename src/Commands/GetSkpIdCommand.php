<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetSkpIdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-skp-id
                            {id : idRiwayatSkp}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /skp/id/{idRiwayatSkp} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = $this->argument('id');
        $paths = [
            'idRiwayatSkp' => $id,
        ];

        $this->info(json_encode(
            Simpeg::getSkpId($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
