<?php

namespace Sgpweb\Domains\Ufs\Providers;

use Illuminate\Support\ServiceProvider;

class UfServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        //
    }

    /**
     * Fazer o vínculo (bind) entre o Contract e Repository.
     *
     * @return void
     */
    public function register() {
        $this->app->bind(
                'Sgpweb\Domains\Ufs\Contracts\UfContract', 'Sgpweb\Domains\Ufs\Repositories\UfRepository'
        );
    }

}
