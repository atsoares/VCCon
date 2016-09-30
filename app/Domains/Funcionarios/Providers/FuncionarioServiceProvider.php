<?php

namespace VCCon\Domains\Funcionarios\Providers;

use Illuminate\Support\ServiceProvider;

class FuncionarioServiceProvider extends ServiceProvider
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
            'VCCon\Domains\Funcionarios\Contracts\FuncionarioContract',
            'VCCon\Domains\Funcionarios\Repositories\FuncionarioRepository'
        );

        $this->app->bind(
            'VCCon\Domains\Funcionarios\Contracts\FuncaoContract',
            'VCCon\Domains\Funcionarios\Repositories\FuncaoRepository'
        );
    }
}
