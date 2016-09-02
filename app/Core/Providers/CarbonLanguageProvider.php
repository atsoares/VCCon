<?php

namespace VCCon\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class CarbonLanguageProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Carbon::setLocale($this->app->getLocale());
    }
}
