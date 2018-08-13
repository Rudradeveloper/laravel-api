<?php

namespace Trainingtool\Api;

use Illuminate\Support\ServiceProvider;

class TrainingtoolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ClientController', function() {
          return new ClientController();
        });
    }
}
