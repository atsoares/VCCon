<?php

namespace Sgpweb\Domains\Pessoas\Providers;

use Illuminate\Support\ServiceProvider;

class PessoaServiceProvider extends ServiceProvider
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
            'Sgpweb\Domains\Pessoas\Contracts\PessoaContract',
            'Sgpweb\Domains\Pessoas\Repositories\PessoaRepository'
        );

        $this->app->bind(
            'Sgpweb\Domains\Pessoas\Contracts\TipoPessoaContract',
            'Sgpweb\Domains\Pessoas\Repositories\TipoPessoaRepository'
        );

        $this->app->bind(
            'Sgpweb\Domains\Pessoas\Contracts\ProcuradorContract',
            'Sgpweb\Domains\Pessoas\Repositories\ProcuradorRepository'
        );

        $this->app->bind(
            'Sgpweb\Domains\Pessoas\Contracts\ProcuradorTipoContract',
            'Sgpweb\Domains\Pessoas\Repositories\ProcuradorTipoRepository'
        );

        $this->app->bind(
            'Sgpweb\Domains\Pessoas\Contracts\SecretarioContract',
            'Sgpweb\Domains\Pessoas\Repositories\SecretarioRepository'
        );

        $this->app->bind(
            'Sgpweb\Domains\Pessoas\Contracts\SecretarioTipoContract',
            'Sgpweb\Domains\Pessoas\Repositories\SecretarioTipoRepository'
        );

        $this->app->bind(
            'Sgpweb\Domains\Pessoas\Contracts\RelatorContract',
            'Sgpweb\Domains\Pessoas\Repositories\RelatorRepository'
        );

        $this->app->bind(
            'Sgpweb\Domains\Pessoas\Contracts\RelatorTipoContract',
            'Sgpweb\Domains\Pessoas\Repositories\RelatorTipoRepository'
        );
    }
}
