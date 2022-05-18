<?php
Route::get('admin','Admin\AdminController@index')->name('admin');

Route::post('login','Admin\AdminController@Check_login')->name('adminLogin');

Route::get('logout','Admin\AdminController@logout')->name('adminLogout');

Route::get('/','Frontend\PageController@index')->name('home');




















//Artisan Route
Route::get('/clear-cache',function(){
    \Artisan::call('config:cache');
    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
});

Route::get('/down',function(){
    if(request()->get('debug')=="yes"){
        \Artisan::call('down');  
    }    
    return ''; 
});