<?php

namespace VCCon\Domains;

use Illuminate\Support\ServiceProvider;

use VCCon\Domains\Unidades\Providers\UnidadeServiceProvider;
use VCCon\Domains\Condominos\Providers\CondominoServiceProvider;
use VCCon\Domains\Funcionarios\Providers\FuncionarioServiceProvider;

class DomainsServiceProvider extends ServiceProvider
{
    /**
     * Main register method.
     */
    public function register()
    {
        $this->registerDomains();
    }

    /**
     * Registra os Domains (sempre que adicionar novo Domain, registrar na lista abaixo seu provider conforme exemplos)
     * Adicionar url do provider abaixo do namespace 
     */
    protected function registerDomains()
    {
        // Unidades Domain
        $this->app->register(UnidadeServiceProvider::class);

        // Condominos Domain
        $this->app->register(CondominoServiceProvider::class);

        // Funcionarios Domain
        $this->app->register(FuncionarioServiceProvider::class);

    }
}