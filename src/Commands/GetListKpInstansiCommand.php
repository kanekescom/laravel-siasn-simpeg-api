<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetListKpInstansiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-list-kp-instansi
                            {periode : Periode}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /pns/list-kp-instansi endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $periode = $this->argument('periode');
        $query = [
            'periode' => $periode,
        ];

        $this->info(json_encode(
            Simpeg::getListKpInstansi([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
