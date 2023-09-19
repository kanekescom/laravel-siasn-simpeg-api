<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetReferensiUnor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-ref-unor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consume /referensi/ref-unor endpoint on SIASN SIMPEG API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info(json_encode(Simpeg::getRefUnor()->object(), JSON_PRETTY_PRINT));
    }
}
