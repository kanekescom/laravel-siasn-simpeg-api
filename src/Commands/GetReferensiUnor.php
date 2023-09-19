<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;
use Kanekescom\Siasn\Api\Simpeg\Models\ReferensiUnor;

class GetReferensiUnor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-ref-unor
                            {--model : Output from model}';

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
        if ($this->option('model')) {
            $data = (new ReferensiUnor)->all();
        } else {
            $data = Simpeg::getRefUnor()->object();
        }

        $this->info(json_encode($data, JSON_PRETTY_PRINT));
    }
}
