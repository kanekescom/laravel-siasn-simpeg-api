<?php

namespace Kanekescom\Siasn\Simpeg\Api\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Simpeg\Api\AngkaKredit;

class GetAngkakreditIdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-angkakredit-id
                            {id : idRiwayatAngkaKredit}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send GET request to /angkakredit/id/{idRiwayatAngkaKredit} endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $id = $this->argument('id');
        $paths = [
            'idRiwayatAngkaKredit' => $id,
        ];

        $this->info(json_encode(
            AngkaKredit::get($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
