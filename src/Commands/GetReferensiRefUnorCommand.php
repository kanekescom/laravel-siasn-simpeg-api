<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\Referensi;

class GetReferensiRefUnorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-referensi-ref-unor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /referensi/ref-unor endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $this->info(json_encode(
            Referensi::getUnor()->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
