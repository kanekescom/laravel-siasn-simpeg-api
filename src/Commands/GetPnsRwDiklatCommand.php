<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;

class GetPnsRwDiklatCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-pns-rw-diklat
                            {nipBaru : NIP Baru}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /pns/rw-diklat/{nipBaru} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $nipBaru = $this->argument('nipBaru');
        $paths = [
            'nipBaru' => $nipBaru,
        ];

        $this->info(json_encode(
            Simpeg::getPnsRwDiklat($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
