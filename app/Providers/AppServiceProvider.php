<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        \URL::forceRootUrl(config('app.url'));
        if (strpos(config('app.url'), 'https://') !== false) {
             \URL::forceScheme('https');
        }
        date_default_timezone_set("Europe/Brussels");
    }
}
