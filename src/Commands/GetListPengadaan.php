<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetListPengadaan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:get-list-pengadaan
                            {tahun : tahun}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consume list pengadaan on SIASN SIMPEG API endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info(json_encode(Simpeg::getListPengadaan($this->argument('tahun'))->object(), JSON_PRETTY_PRINT));
    }
}
