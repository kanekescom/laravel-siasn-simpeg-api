<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Penghargaan;

class DeletePenghargaanDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:delete-penghargaan-delete
                            {id : idRiwayatPenghargaan}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send DELETE request to /penghargaan/delete/{idRiwayatPenghargaan} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $id = $this->argument('id');
        $paths = [
            'idRiwayatPenghargaan' => $id,
        ];

        $this->info(json_encode(
            Penghargaan::deleteId($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
