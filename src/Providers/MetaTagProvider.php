<?php

namespace Rochi88\Admin\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Rochi88\Admin\Classes\MetaBuilder;

class MetaTagProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('meta', function () {
            $url = 'http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
            return MetaBuilder::render($url);
        });
        // Template Variables
        view()->share('assetLink', config('admin.assets', 'assets'));
    }
}
