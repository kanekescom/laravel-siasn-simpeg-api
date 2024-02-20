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
                Commands\DeleteAngkakreditDeleteCommand::class,
                Commands\GetAngkakreditIdCommand::class,
                Commands\PostAngkakreditSaveCommand::class,
                Commands\PostCpnsSaveCommand::class,
                Commands\GetDiklatIdCommand::class,
                Commands\PostDiklatSaveCommand::class,
                Commands\GetDownloadDokCommand::class,
                Commands\DownloadDownloadDokCommand::class,
                Commands\PostUploadDokCommand::class,
                Commands\PostUploadDokRwCommand::class,
                Commands\GetHukdisIdCommand::class,
                Commands\PostHukdisSaveCommand::class,
                Commands\GetJabatanIdCommand::class,
                Commands\GetJabatanPnsCommand::class,
                Commands\PostJabatanSaveCommand::class,
                Commands\DeleteKinerjaperiodikDeleteCommand::class,
                Commands\PostKinerjaperiodikSaveCommand::class,
                Commands\GetKursusIdCommand::class,
                Commands\PostKursusSaveCommand::class,
                Commands\GetPengadaanListPengadaanInstansiCommand::class,
                Commands\GetPenghargaanIdCommand::class,
                Commands\PostPenghargaanSaveCommand::class,
                Commands\GetPnsDataAnakCommand::class,
                Commands\GetPnsDataOrtuCommand::class,
                Commands\GetPnsDataPasanganCommand::class,
                Commands\PostPnsDataUtamaUpdateCommand::class,
                Commands\GetPnsDataUtamaCommand::class,
                Commands\GetPnsPhotoCommand::class,
                Commands\DownloadPnsPhotoCommand::class,
                Commands\GetPnsListKpInstansiCommand::class,
                Commands\PostUploadDokSkKpCommand::class,
                Commands\GetPnsListPensiunInstansiCommand::class,
                Commands\GetPnsRwAngkakreditCommand::class,
                Commands\GetPnsRwCltnCommand::class,
                Commands\GetPnsRwDiklatCommand::class,
                Commands\GetPnsRwDp3Command::class,
                Commands\GetPnsRwGolonganCommand::class,
                Commands\GetPnsRwHukdisCommand::class,
                Commands\GetPnsRwJabatanCommand::class,
                Commands\GetPnsRwKinerjaperiodikCommand::class,
                Commands\GetPnsRwKursusCommand::class,
                Commands\GetPnsRwMasakerjaCommand::class,
                Commands\GetPnsRwPemberhentianCommand::class,
                Commands\GetPnsRwPendidikanCommand::class,
                Commands\GetPnsRwPenghargaanCommand::class,
                Commands\GetPnsRwPindahinstansiCommand::class,
                Commands\GetPnsRwPnsunorCommand::class,
                Commands\GetPnsRwPwkCommand::class,
                Commands\GetPnsRwSkpCommand::class,
                Commands\GetPnsRwSkp22Command::class,
                Commands\GetReferensiRefUnorCommand::class,
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
