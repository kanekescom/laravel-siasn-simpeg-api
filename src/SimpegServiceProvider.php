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
            ->hasCommands([
                Commands\GetAngkaKreditIdCommand::class,
                Commands\PostAngkaKreditSaveCommand::class,
                Commands\PostCpnsSaveCommand::class,
                Commands\GetDiklatIdCommand::class,
                Commands\PostDiklatSaveCommand::class,
                Commands\GetDownloadDokCommand::class,
                Commands\PostUploadDokCommand::class,
                Commands\PostUploadDokRwCommand::class,
                Commands\GetHukdisIdCommand::class,
                Commands\PostHukdisSaveCommand::class,
                Commands\GetJabatanIdCommand::class,
                Commands\GetJabatanPnsCommand::class,
                Commands\PostJabatanSaveCommand::class,
                Commands\GetKursusIdCommand::class,
                Commands\PostKursusSaveCommand::class,
                Commands\GetListPengadaanInstansiCommand::class,
                Commands\GetPenghargaanIdCommand::class,
                Commands\PostPenghargaanSaveCommand::class,
                Commands\GetDataAnakCommand::class,
                Commands\GetDataOrtuCommand::class,
                Commands\GetDataPasanganCommand::class,
                Commands\PostDataUtamaUpdateCommand::class,
                Commands\GetDataUtamaCommand::class,
                Commands\GetListKpInstansiCommand::class,
                Commands\PostUploadDokSkKpCommand::class,
                Commands\GetListPensiunInstansiCommand::class,
                Commands\GetRwAngkaKreditCommand::class,
                Commands\GetRwCltnCommand::class,
                Commands\GetRwDiklatCommand::class,
                Commands\GetRwDp3Command::class,
                Commands\GetRwGolonganCommand::class,
                Commands\GetRwHukdisCommand::class,
                Commands\GetRwJabatanCommand::class,
                Commands\GetRwKursusCommand::class,
                Commands\GetRwMasaKerjaCommand::class,
                Commands\GetRwPemberhentianCommand::class,
                Commands\GetRwPendidikanCommand::class,
                Commands\GetRwPenghargaanCommand::class,
                Commands\GetRwPindahInstansiCommand::class,
                Commands\GetRwUnorCommand::class,
                Commands\GetRwPwkCommand::class,
                Commands\GetRwSkpCommand::class,
                Commands\GetRwSkp22Command::class,
                Commands\GetReferensiUnorCommand::class,
                Commands\PostSkp2021SaveCommand::class,
                Commands\GetSkpIdCommand::class,
                Commands\PostSkpSaveCommand::class,
                Commands\GetSkp22IdCommand::class,
                Commands\PostSkp22SaveCommand::class,
            ]);
    }

    public function packageRegistered(): void
    {
        $this->registerHttpMacroHelpers();
    }

    protected function registerHttpMacroHelpers(): void
    {
        if (! method_exists(\Illuminate\Support\Facades\Http::class, 'macro')) { // Lumen
            return;
        }

        \Illuminate\Support\Facades\Http::macro('siasnSimpeg', function () {
            return new Simpeg;
        });
    }
}
