<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class DeleteAngkakreditDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:delete-angkakredit-delete
                            {id : idRiwayatAngkaKredit}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send DELETE request to /angkakredit/delete/{idRiwayatAngkaKredit} endpoint';

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
            Simpeg::getAngkaKreditId($paths)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
