<?php

namespace Kanekescom\Siasn\Api\Simpeg\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Api\Simpeg\Exceptions\InvalidJsonException;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class PostJabatanSaveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-simpeg:post-jabatan-save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send POST request to /jabatan/save endpoint';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $this->line('<bg=yellow> BE CAREFUL! </> This action can change the data on SIASN BKN.');
        $this->newLine();
        $this->comment('{"eselonId":"string","id":"string","instansiId":"string","jabatanFungsionalId":"string","jabatanFungsionalUmumId":"string","jenisJabatan":"string","nomorSk":"string","path":[{"dok_id":"string","dok_nama":"string","dok_uri":"string","object":"string","slug":"string"}],"pnsId":"string","satuanKerjaId":"string","tanggalSk":"string","tmtJabatan":"string","tmtPelantikan":"string","unorId":"string"}');

        $query = json_decode($this->ask('Copy the json above, fill it and paste it here'), true);

        if (! is_array($query)) {
            throw new InvalidJsonException;

            return self::FAILURE;
        }

        $this->info(json_encode(
            Simpeg::postJabatanSave([], $query)->object(),
            JSON_PRETTY_PRINT
        ));

        $this->newLine();
        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
