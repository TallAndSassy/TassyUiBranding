<?php

namespace TallAndSassy\TassyUiBranding;

use Illuminate\Support\ServiceProvider;

class TassyUiBrandingServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tallandsassy');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'tallandsassy');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/tassyuibranding.php', 'tassyuibranding');

        // Register the service the package provides.
        $this->app->singleton('tassyuibranding', function ($app) {
            return new TassyUiBranding;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['tassyuibranding'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/tassyuibranding.php' => config_path('tassyuibranding.php'),
        ], 'tassyuibranding.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/tallandsassy'),
        ], 'tassyuibranding.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/tallandsassy'),
        ], 'tassyuibranding.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/tallandsassy'),
        ], 'tassyuibranding.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
