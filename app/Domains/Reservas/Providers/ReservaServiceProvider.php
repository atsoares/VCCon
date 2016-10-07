<?php

namespace VCCon\Domains\Reservas\Providers;

use Illuminate\Support\ServiceProvider;

class ReservaServiceProvider extends ServiceProvider
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
     * Fazer o vínculo (bind) entre o Contract e Repository.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'VCCon\Domains\Reservas\Contracts\ReservaContract',
            'VCCon\Domains\Reservas\Repositories\ReservaRepository'
        );
    }
}
