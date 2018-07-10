<?php

namespace Shuramita\Property;

use Illuminate\Support\Facades\View;
use Illuminate\Foundation\AliasLoader;
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
        $this->loadViewsFrom(__DIR__.'/resources/views', 'property');
        $loader = AliasLoader::getInstance();
        $loader->alias('PropertyHelper', '\Shuramita\Property\Helper');
        View::composer(
            ['property::partials.create-address'], '\Shuramita\Property\Models\StaticData@all_provinces'
        );
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