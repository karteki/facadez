<?php

namespace Facadez\Magic;

use Illuminate\Support\ServiceProvider;

class MagicServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';

        $this->loadViewsFrom(__DIR__ . '/Views', 'magic');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['magic'] = $this->app->share(function($app){
            return new Magic;
        });
    }
}
