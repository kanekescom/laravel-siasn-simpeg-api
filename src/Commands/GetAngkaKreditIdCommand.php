<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetAngkaKreditIdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-angka-kredit-id
                            {id : idRiwayatAngkaKredit}
                            {--model : Output from model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /angkakredit/id/{idRiwayatAngkaKredit} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = $this->argument('id');
        $paths = [
            'idRiwayatAngkaKredit' => $id,
        ];

        $this->info(json_encode(
            Simpeg::getAngkaKreditId($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
