<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetKursusIdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-kursus-id
                            {id : idRiwayatKursus}
                            {--model : Output from model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /kursus/id/{idRiwayatKursus} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = $this->argument('id');
        $paths = [
            'idRiwayatKursus' => $id,
        ];

        $this->info(json_encode(
            Simpeg::getKursusId($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
