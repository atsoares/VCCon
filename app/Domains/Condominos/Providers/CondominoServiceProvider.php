<?php

namespace VCCon\Domains\Condominos\Providers;

use Illuminate\Support\ServiceProvider;

class CondominoServiceProvider extends ServiceProvider
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
            'VCCon\Domains\Condominos\Contracts\CondominoContract',
            'VCCon\Domains\Condominos\Repositories\CondominoRepository'
        );

        $this->app->bind(
            'VCCon\Domains\Condominos\Contracts\CarroCondominoContract',
            'VCCon\Domains\Condominos\Repositories\CarroCondominoRepository'
        );

        $this->app->bind(
            'VCCon\Domains\Condominos\Contracts\ContatoCondominoContract',
            'VCCon\Domains\Condominos\Repositories\ContatoCondominoRepository'
        );
    }
}
