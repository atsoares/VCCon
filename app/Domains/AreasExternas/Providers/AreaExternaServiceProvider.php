<?php

namespace VCCon\Domains\AreasExternas\Providers;

use Illuminate\Support\ServiceProvider;

class AreaExternaServiceProvider extends ServiceProvider
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
            'VCCon\Domains\AreasExternas\Contracts\AreaExternaContract',
            'VCCon\Domains\AreasExternas\Repositories\AreaExternaRepository'
        );
    }
}
