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
      $this->registerMagic();
    }
    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerMagic()
    {
        $this->app->bind('Magic', function ($app) {
            return new Magic($app);
        });

        // $this->app->alias('magic', 'facadez\magic');
    }

}
