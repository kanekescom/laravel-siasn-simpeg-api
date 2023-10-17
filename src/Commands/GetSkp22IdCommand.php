<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetSkp22IdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-skp22-id
                            {id : idRiwayatSkp}
                            {--model : Output from model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /skp22/id/{idRiwayatSkp} endpoint';

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
            Simpeg::getSkp22Id($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
