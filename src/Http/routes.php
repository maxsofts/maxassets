<?php

Route::group(['as' => 'admin::'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
        return "test";
    }]);
});

Route::get(Config::get('maxcms.core.config.backend'),'MaxAdminController@index');