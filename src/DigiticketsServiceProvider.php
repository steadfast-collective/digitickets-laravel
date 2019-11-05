<?php

namespace SteadfastCollective\Digitickets;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class DigiticketsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->registerRoutes();
        $this->registerPublishing();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->configure();

        $this->app->singleton(ApiRequestor::class, function () {
            return new ApiRequestor();
        });
    }

    /**
     * Setup the configuration for Digitickets.
     *
     * @return void
     */
    protected function configure()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/digitickets.php', 'digitickets'
        );
    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        Route::group([
            'prefix' => config('digitickets.path'),
            'namespace' => 'SteadfastCollective\Digitickets\Http\Controllers',
            'as' => 'digitickets.',
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/digitickets.php' => $this->app->configPath('digitickets.php'),
            ], 'digitickets-config');
        }
    }
}
