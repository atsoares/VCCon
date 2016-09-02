<?php

namespace VCCon\Domains\Unidades\Providers;

use Illuminate\Support\ServiceProvider;

class UnidadeServiceProvider extends ServiceProvider
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
            'VCCon\Domains\Unidades\Contracts\UnidadeContract',
            'VCCon\Domains\Unidades\Repositories\UnidadeRepository'
        );
    }
}
