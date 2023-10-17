<?php

namespace Kanekescom\Siasn\Api\Simpeg;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SimpegServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-siasn-simpeg-api')
            ->hasConfigFile()
            ->hasCommand(Commands\GetAngkaKreditIdCommand::class)
            ->hasCommand(Commands\PostAngkaKreditSaveCommand::class)
            ->hasCommand(Commands\PostCpnsSaveCommand::class)
            ->hasCommand(Commands\GetDiklatIdCommand::class)
            ->hasCommand(Commands\PostDiklatSaveCommand::class)
            ->hasCommand(Commands\GetDownloadDokCommand::class)
            ->hasCommand(Commands\PostUploadDokCommand::class)
            ->hasCommand(Commands\PostUploadDokRwCommand::class)
            ->hasCommand(Commands\GetHukdisIdCommand::class)
            ->hasCommand(Commands\PostHukdisSaveCommand::class)
            ->hasCommand(Commands\GetJabatanIdCommand::class)
            ->hasCommand(Commands\GetJabatanPnsCommand::class)
            ->hasCommand(Commands\PostJabatanSaveCommand::class)
            ->hasCommand(Commands\GetKursusIdCommand::class)
            ->hasCommand(Commands\PostKursusSaveCommand::class)
            ->hasCommand(Commands\GetListPengadaanInstansiCommand::class)
            ->hasCommand(Commands\GetPenghargaanIdCommand::class)
            ->hasCommand(Commands\PostPenghargaanSaveCommand::class)
            ->hasCommand(Commands\GetDataAnakCommand::class)
            ->hasCommand(Commands\GetDataOrtuCommand::class)
            ->hasCommand(Commands\GetDataPasanganCommand::class)
            ->hasCommand(Commands\PostDataUtamaUpdateCommand::class)
            ->hasCommand(Commands\GetDataUtamaCommand::class)
            ->hasCommand(Commands\GetListKpInstansiCommand::class)
            ->hasCommand(Commands\PostUploadDokSkKpCommand::class)
            ->hasCommand(Commands\GetListPensiunInstansiCommand::class)
            ->hasCommand(Commands\GetRwAngkaKreditCommand::class)
            ->hasCommand(Commands\GetRwCltnCommand::class)
            ->hasCommand(Commands\GetRwDiklatCommand::class)
            ->hasCommand(Commands\GetRwDp3Command::class)
            ->hasCommand(Commands\GetRwGolonganCommand::class)
            ->hasCommand(Commands\GetRwHukdisCommand::class)
            ->hasCommand(Commands\GetRwJabatanCommand::class)
            ->hasCommand(Commands\GetRwKursusCommand::class)
            ->hasCommand(Commands\GetRwMasaKerjaCommand::class)
            ->hasCommand(Commands\GetRwPemberhentianCommand::class)
            ->hasCommand(Commands\GetRwPendidikanCommand::class)
            ->hasCommand(Commands\GetRwPenghargaanCommand::class)
            ->hasCommand(Commands\GetRwPindahInstansiCommand::class)
            ->hasCommand(Commands\GetRwUnorCommand::class)
            ->hasCommand(Commands\GetRwPwkCommand::class)
            ->hasCommand(Commands\GetRwSkpCommand::class)
            ->hasCommand(Commands\GetRwSkp22Command::class)
            ->hasCommand(Commands\GetReferensiUnorCommand::class)
            ->hasCommand(Commands\PostSkp2021SaveCommand::class)
            ->hasCommand(Commands\GetSkpIdCommand::class)
            ->hasCommand(Commands\PostSkpSaveCommand::class)
            ->hasCommand(Commands\GetSkp22IdCommand::class)
            ->hasCommand(Commands\PostSkp22SaveCommand::class);
    }

    public function packageRegistered(): void
    {
        $this->registerHttpMacroHelpers();
    }

    protected function registerHttpMacroHelpers(): void
    {
        if (!method_exists(\Illuminate\Support\Facades\Http::class, 'macro')) { // Lumen
            return;
        }

        \Illuminate\Support\Facades\Http::macro('siasnSimpeg', function () {
            return new Simpeg;
        });
    }
}
