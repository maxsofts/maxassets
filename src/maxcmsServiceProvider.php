<?php

namespace maxsofts\maxcms;

use Illuminate\Support\ServiceProvider;

class maxcmsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__ . 'routes.php';
        }
        $this->loadViewsFrom(base_path('resource/views'), 'maxcms');
        $this->publishes([
            __DIR__ . '/views' => base_path('resource/views')
        ]);


        $this->publishes([
            __DIR__ . '/migrations' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}