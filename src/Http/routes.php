<?php


Route::get('admin',function(){
//    $admin = DB::select("SELECT * FROM maxsoft_setting");
//    return view("settingadmin::admin")->with("admin",$admin);
    return view("maxcms::admin");
});