<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

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
        $id = $this->argument('id');
        $paths = [
            'idRiwayatHukdis' => $id,
        ];

        $this->info(json_encode(
            Simpeg::getHukdisId($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
