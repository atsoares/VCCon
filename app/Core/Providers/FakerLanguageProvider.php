<?php

namespace VCCon\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;

class FakerLanguageProvider extends ServiceProvider
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
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FakerGenerator::class, function()
        {
            return FakerFactory::create('pt_BR');
        });
    }
}
