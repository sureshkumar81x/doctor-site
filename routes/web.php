<?php
Route::get('admin','Admin\AdminController@index')->name('admin');

Route::post('login','Admin\AdminController@Check_login')->name('adminLogin');

Route::get('logout','Admin\AdminController@logout')->name('adminLogout');


/**
 * Frontend route starting
 */
Route::get('/','Frontend\PageController@index')->name('home');
Route::get('/doctors','Frontend\PageController@doctors')->name('doctors');
Route::get('/doctor-details/{id}','Frontend\PageController@doctorDetails')->name('doctorDetails');
Route::get('/hospitals','Frontend\PageController@hospitals')->name('hospitals');
Route::get('/hospital-details/{id}','Frontend\PageController@hospitalDetails')->name('hospitalDetails');
Route::get('/diagnostics','Frontend\PageController@diagnostics')->name('diagnostics');
Route::get('/diagnostic-deails/{id}','Frontend\PageController@diagnosticDetails')->name('diagnosticDetails');



















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