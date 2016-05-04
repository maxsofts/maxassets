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
        /**
         * Add Router from packager load
         *
         * @vn: Load trực tiếp các hàm điều khiển (controller) trong gói mở rộng
         */
        $this->app->router->group(['namespace' => 'maxsofts\maxcms\Http\Controllers'],
            function(){
                require __DIR__.'/Http/routes.php';
            });
        /**
         * Load Auto view from new base_path
         *
         * @vn: Load thư mục hiển thị giao diện tại thư mục mới
         */
        $this->loadViewsFrom(base_path('MaxCms/views'), 'maxcms');
        /**
         * Publishes views
         *
         * @vn: Công khai thư mục view mới ( chuyển thư mục views sang thư mục mới để load view)
         */
        $this->publishes([
            __DIR__ . '/views' => base_path('MaxCms/views')
        ]);
        /**
         * Publishes themes
         */
        $this->publishes([
            __DIR__ . '/themes' => base_path('public/themes/maxcms')
        ]);
        /**
         * Add Router from packager load
         *
         * @vn: Công khai thư mục migrations mới ( chuyển thư mục migrations sang thư mục mới để load database)
         */
        $this->publishes([
            __DIR__ . '/migrations' => database_path('/migrations')
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