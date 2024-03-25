<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;

class DownloadPnsPhotoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:download-pns-photo
                            {idPns : Id Pns}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /pns/photo/{idPns} endpoint and save into local disk';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $idPns = $this->argument('idPns');
        $paths = [
            'idPns' => $idPns,
        ];

        $filepath = Simpeg::downloadPnsPhoto($paths);

        $this->components->info("Downloaded to {$filepath}");

        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
