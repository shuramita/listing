<?php

namespace Shuramita\Property;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class PropertyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/property.php', 'property');
    }
}