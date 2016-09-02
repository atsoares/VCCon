<?php

namespace Sgpweb\Domains\OrgaosJulgadores\Providers;

use Illuminate\Support\ServiceProvider;

class OrgaoJulgadorServiceProvider extends ServiceProvider
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
            'Sgpweb\Domains\OrgaosJulgadores\Contracts\OrgaoJulgadorContract',
            'Sgpweb\Domains\OrgaosJulgadores\Repositories\OrgaoJulgadorRepository'
        );
    }
}
