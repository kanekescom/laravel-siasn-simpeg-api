<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Skp;

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
        $start = now();
        $id = $this->argument('id');
        $paths = [
            'idRiwayatSkp' => $id,
        ];

        $this->info(json_encode(
            Skp::get($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
