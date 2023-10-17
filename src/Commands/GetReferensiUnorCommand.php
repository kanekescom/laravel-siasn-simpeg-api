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
    protected $signature = 'siasn-simpeg:get-referensi-unor
                            {--model : Output from model}';

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
        $this->info(json_encode(
            Simpeg::getReferensiUnor()->object(),
            JSON_PRETTY_PRINT
        ));

        return self::SUCCESS;
    }
}
