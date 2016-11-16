<?php

namespace VCCon\Domains\Reunioes\Providers;

use Illuminate\Support\ServiceProvider;

class ReuniaoServiceProvider extends ServiceProvider
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
            'VCCon\Domains\Reunioes\Contracts\ReuniaoContract',
            'VCCon\Domains\Reunioes\Repositories\ReuniaoRepository'
        );
    }
}
