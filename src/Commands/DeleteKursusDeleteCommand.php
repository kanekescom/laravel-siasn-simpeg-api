<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Kursus;

class DeleteKursusDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:delete-kursus-delete
                            {id : idRiwayatKursus}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send DELETE request to /kursus/delete/{idRiwayatKursus} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $id = $this->argument('id');
        $paths = [
            'idRiwayatKursus' => $id,
        ];

        $this->info(json_encode(
            Kursus::delete($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
