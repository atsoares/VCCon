<?php

namespace Sgpweb\Domains\Processos\Providers;

use Illuminate\Support\ServiceProvider;

class ProcessoServiceProvider extends ServiceProvider
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
            'Sgpweb\Domains\Processos\Contracts\TipoEntidadeContract',
            'Sgpweb\Domains\Processos\Repositories\TipoEntidadeRepository'
        );
    }
}
