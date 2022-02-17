<?php

namespace :uc:vendor\:uc:package\Providers;

use Illuminate\Support\ServiceProvider;

class :uc:packageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', ':lc:vendor');
        // $this->loadViewsFrom(__DIR__.'/../Resources/views', ':lc:vendor');
        // $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
        // $this->loadRoutesFrom(__DIR__.'/../Routes/routes.php');

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
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../Config/:lc:package.php', ':lc:vendor:::lc:package');

        // Register the service the package provides.
//         $this->app->singleton(':lc:package', function ($app) {
//             return new :uc:package;
//         });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [':lc:package'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../Configs/:lc:package.php' => config_path(':lc:package.php'),
        ], ':lc:vendor:::lc:package.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../Resources/views' => base_path('resources/views/vendor/:lc:vendor'),
        ], ':lc:package.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../Resources/assets' => public_path('vendor/:lc:vendor'),
        ], ':lc:package.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../Resources/lang' => resource_path('lang/vendor/:lc:vendor'),
        ], ':lc:package.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
