<?php

namespace Sgpweb\Domains\LrfProcessos\Providers;

use Illuminate\Support\ServiceProvider;

class LrfProcessosServiceProvider extends ServiceProvider
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
        $this->app->bind(
            'Sgpweb\Domains\LrfProcessos\Contracts\LrfDataContract',
            'Sgpweb\Domains\LrfProcessos\Repositories\LrfDataRepository'
        );

        $this->app->bind(
            'Sgpweb\Domains\LrfProcessos\Contracts\LrfPeriodoContract',
            'Sgpweb\Domains\LrfProcessos\Repositories\LrfPeriodoRepository'
        );
    }
}
