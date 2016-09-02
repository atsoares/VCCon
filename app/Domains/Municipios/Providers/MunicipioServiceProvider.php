<?php

namespace Sgpweb\Domains\Municipios\Providers;

use Illuminate\Support\ServiceProvider;

class MunicipioServiceProvider extends ServiceProvider
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
            'Sgpweb\Domains\Municipios\Contracts\MunicipioContract',
            'Sgpweb\Domains\Municipios\Repositories\MunicipioRepository'
        );
        
         }
}
