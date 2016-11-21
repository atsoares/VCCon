<?php

namespace VCCon\Applications\App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

	/**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    	$this->registerRoutes($this->app['router']);
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'app');
    }

	/**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function registerRoutes(Router $router)
    {
    	$this->registerWebRoutes($router);
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function registerWebRoutes(Router $router)
    {
        $router->group([
            'namespace' => 'VCCon\Applications\App\Http\Controllers',
            'prefix' => '',
            'middleware' => 'web',
        ], function ($router) {
            require app_path('Applications/App/Http/routes.php');
        });
    }
}