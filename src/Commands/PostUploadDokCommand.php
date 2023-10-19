<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Exceptions\InvalidJsonException;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class PostUploadDokCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-upload-dok';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /upload-dok endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $this->line('<bg=yellow> BE CAREFUL! </> This action can change the data on SIASN BKN.');
        $this->newLine();
        $this->comment('{"file":"string","id_ref_dokumen":"string"}');

        $query = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        if (! is_array($query)) {
            throw new InvalidJsonException;

            return self::FAILURE;
        }

        $this->info(json_encode(
            Simpeg::postUploadDok([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
