<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;

class GetPnsPhotoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-pns-photo
                            {idPns : Id Pns}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /pns/photo/{idPns} endpoint';

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

        $response = Simpeg::getPnsPhoto($paths);
        $content = $response->getBody()->getContents();

        if ($content == null) {
            $this->components->error('Content not found');

            return self::FAILURE;
        }

        $filename = "siasn-simpeg/pns/photo/{$idPns}.jpg";

        Storage::disk('local')->put($filename, $content);

        $filepath = Storage::disk('local')->path($filename);

        $this->components->info("Downloaded to {$filepath}");

        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
