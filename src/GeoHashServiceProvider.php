<?php

namespace Devdon\GeoHash;

use Illuminate\Support\ServiceProvider;

class GeoHashServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Devdon\GeoHash\GeoHashController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
