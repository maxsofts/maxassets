<?php

namespace maxsofts\maxassets;

use Illuminate\Support\ServiceProvider;

class MaxAssetsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        /**
         * Add config
         *
         * @vn: Công khai thư mục migrations mới ( chuyển thư mục migrations sang thư mục mới để load database)
         */
        $this->publishes([
            __DIR__ . '/config' => config_path()
        ], 'config');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Modules', 'Modules' );

    }

}