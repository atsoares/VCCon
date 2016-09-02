<?php

namespace Sgpweb\Domains\Processo\Providers;

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
            'Sgpweb\Domains\Processo\Contracts\ProcessoCategoriasContract',
            'Sgpweb\Domains\Processo\Repositories\ProcessoCategoriasRepository'
        );
        
        $this->app->bind(
            'Sgpweb\Domains\Processo\Contracts\ProcessoTipoContract',
            'Sgpweb\Domains\Processo\Repositories\ProcessoTipoRepository'
        );
        
        $this->app->bind(
            'Sgpweb\Domains\Processo\Contracts\ProcessoSubTipoContract',
            'Sgpweb\Domains\Processo\Repositories\ProcessoSubTipoRepository'
        );
    }
}
