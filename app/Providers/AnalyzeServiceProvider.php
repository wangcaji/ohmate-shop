<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Werashop\Statistics\Customer\Analyzer;

class AnalyzeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('analyzer', function ($app) {
            return new Analyzer();
        });
    }
}
