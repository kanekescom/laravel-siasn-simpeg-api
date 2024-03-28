<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Kinerja;

class DeleteKinerjaperiodikDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:delete-kinerjaperiodik-delete
                            {id : idRiwayatKinerjaPeriodik}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send DELETE request to /kinerjaperiodik/delete/{idRiwayatKinerjaPeriodik} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $id = $this->argument('id');
        $paths = [
            'idRiwayatKinerjaPeriodik' => $id,
        ];

        $this->info(json_encode(
            Kinerja::deleteId($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
