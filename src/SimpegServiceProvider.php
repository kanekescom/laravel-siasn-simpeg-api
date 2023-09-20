<?php

namespace Kanekescom\Siasn\Api\Simpeg;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class SimpegServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot(): void
    {
        $this->offerPublishing();

        $this->registerCommands();

        $this->registerHttpMacroHelpers();
    }

    /**
     * Register any package services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/siasn_simpeg.php', 'siasn_simpeg');

        // Register the service the package provides.
        $this->app->singleton(Simpeg::class, function ($app) {
            return new Simpeg;
        });
    }

    /**
     * Offer publishing.
     */
    protected function offerPublishing(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        if (! function_exists('config_path')) {
            // function not available and 'publish' not relevant in Lumen
            return;
        }

        $this->publishes([
            __DIR__.'/../config/siasn_simpeg.php' => config_path('siasn_simpeg.php'),
        ], 'config');
    }

    /**
     * Register commands.
     */
    protected function registerCommands(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Commands\GetDataUtama::class,
            Commands\GetListPengadaan::class,
            Commands\GetListPensiun::class,
            Commands\GetReferensiUnor::class,
            Commands\GetRiwayatJabatan::class,
        ]);
    }

    /**
     * Register HTTP Macros.
     */
    protected function registerHttpMacroHelpers(): void
    {
        if (! method_exists(Http::class, 'macro')) { // Lumen
            return;
        }

        Http::macro('siasnSimpeg', function () {
            return new Simpeg;
        });
    }
}
