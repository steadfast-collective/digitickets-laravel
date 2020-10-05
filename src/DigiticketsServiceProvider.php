<?php

namespace SteadfastCollective\Digitickets;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use SteadfastCollective\Digitickets\ApiRequestor;

class DigiticketsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::group([
            'prefix' => config('digitickets.path'),
            'namespace' => 'SteadfastCollective\Digitickets\Http\Controllers',
            'as' => 'digitickets.',
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/digitickets.php' => $this->app->configPath('digitickets.php'),
            ], 'digitickets-config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/digitickets.php', 'digitickets');

        $this->app->bind('Digitickets', ApiRequestor::class);
    }
}
