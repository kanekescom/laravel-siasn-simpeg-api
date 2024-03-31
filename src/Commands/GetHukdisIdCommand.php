<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Hukdis;

class GetHukdisIdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-hukdis-id
                            {id : idRiwayatHukdis}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /hukdis/id/{idRiwayatHukdis} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $id = $this->argument('id');
        $paths = [
            'idRiwayatHukdis' => $id,
        ];

        $this->info(json_encode(
            Hukdis::get($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
