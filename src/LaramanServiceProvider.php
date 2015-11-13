<?php

namespace Phpuzem\Laraman;

use Illuminate\Support\ServiceProvider;

class LaramanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['laraman'] = $this->app->share(function () {
            return new LaramanClass;
        });
        $this->app->alias('laraman', 'Phpuzem\Laraman\LaramanClass');
    }
}
