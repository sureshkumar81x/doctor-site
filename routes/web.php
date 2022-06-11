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
Route::post('/doctor-review-submit','Frontend\PageController@doctorReviewSubmit')->name('doctorReviewSubmit');

Route::get('/hospitals','Frontend\PageController@hospitals')->name('hospitals');
Route::get('/hospital-details/{id}','Frontend\PageController@hospitalDetails')->name('hospitalDetails');
Route::post('/hospital-review-submit','Frontend\PageController@hospitalReviewSubmit')->name('hospitalReviewSubmit');

Route::get('/diagnostics','Frontend\PageController@diagnostics')->name('diagnostics');
Route::get('/diagnostic-deails/{id}','Frontend\PageController@diagnosticDetails')->name('diagnosticDetails');
Route::post('/diagnostic-review-submit','Frontend\PageController@diagnosticReviewSubmit')->name('diagnosticReviewSubmit');


















//Artisan Route
Route::get('artisan/clear-cache',function(){
    \Artisan::call('config:cache');
    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
});

Route::get('artisan/down',function(){
        \Artisan::call('down');  
    return ''; 
});
Route::get('artisan/up',function(){
    \Artisan::call('up');  
    return ''; 
});