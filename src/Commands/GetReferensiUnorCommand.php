<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetReferensiUnorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-referensi-unor';

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
            Simpeg::getReferensiUnor()->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
