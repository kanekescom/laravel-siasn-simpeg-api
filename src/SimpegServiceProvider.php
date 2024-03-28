<?php

namespace Kanekescom\Siasn\Simpeg\Api;

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
                // AngkaKredit
                Commands\DeleteAngkakreditDeleteCommand::class,
                Commands\GetAngkakreditIdCommand::class,
                Commands\PostAngkakreditSaveCommand::class,

                // CPNS
                Commands\PostCpnsSaveCommand::class,

                // Diklat
                Commands\GetDiklatIdCommand::class,
                Commands\PostDiklatSaveCommand::class,

                // Upload
                Commands\GetDownloadDokCommand::class,
                Commands\DownloadDownloadDokCommand::class,
                Commands\PostUploadDokCommand::class,
                Commands\PostUploadDokRwCommand::class,

                // Hukdis
                Commands\GetHukdisIdCommand::class,
                Commands\PostHukdisSaveCommand::class,

                // Jabatan
                Commands\GetJabatanIdCommand::class,
                Commands\GetJabatanPnsCommand::class,
                Commands\PostJabatanUnorjabatanSaveCommand::class,
                Commands\PostJabatanSaveCommand::class,

                // Kinerja
                Commands\DeleteKinerjaperiodikDeleteCommand::class,
                Commands\PostKinerjaperiodikSaveCommand::class,

                // Kursus
                Commands\DeleteKursusDeleteCommand::class,
                Commands\GetKursusIdCommand::class,
                Commands\PostKursusSaveCommand::class,

                // Pengadaan
                Commands\GetPengadaanListPengadaanInstansiCommand::class,

                // Penghargaan
                Commands\GetPenghargaanIdCommand::class,
                Commands\DeletePenghargaanDeleteCommand::class,
                Commands\PostPenghargaanSaveCommand::class,

                // PNS
                Commands\GetPnsDataAnakCommand::class,
                Commands\GetPnsDataOrtuCommand::class,
                Commands\GetPnsDataPasanganCommand::class,
                Commands\PostPnsDataUtamaUpdateCommand::class,
                Commands\GetPnsDataUtamaCommand::class,
                Commands\GetPnsPhotoCommand::class,
                Commands\DownloadPnsPhotoCommand::class,

                // Kp
                Commands\GetPnsListKpInstansiCommand::class,
                Commands\PostUploadDokSkKpCommand::class,

                // Pemberhentian
                Commands\GetPnsListPensiunInstansiCommand::class,

                // Riwayat
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

                // Referensi
                Commands\GetReferensiRefUnorCommand::class,

                // Skp
                Commands\PostSkp2021SaveCommand::class,
                Commands\GetSkpIdCommand::class,
                Commands\PostSkpSaveCommand::class,

                // Skp 2022
                Commands\GetSkp22IdCommand::class,
                Commands\PostSkp22SaveCommand::class,
            ])
            ->hasInstallCommand(function ($command) {
                $command
                    ->startWith(function ($command) {
                        $command->info('Hello, and welcome to my great laravel package!');
                    })
                    ->publishConfigFile()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('kanekescom/laravel-siasn-simpeg-api')
                    ->endWith(function ($command) {
                        $command->info('Have a great day!');
                    });
            });
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
