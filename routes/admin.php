<?php
Route::group(['as'=>'admin::','prefix'=>'cpanel/admin','middleware' => ['web','AdminMiddleWare']], function () {

    Route::get('/dashboard','Admin\Dashboard\DashboardController@dashboard')->name('dashboard');
    Route::get('changePassForm','Admin\AdminController@changePassForm')->name('changePassForm');
    Route::post('ChangePass','Admin\AdminController@ChangePass')->name('ChangePass');
    Route::get('profile/{id}','Admin\AdminController@profile')->name('profile');
    Route::post('update-profile','Admin\AdminController@updateProfile')->name('updateProfile');

    /* Users route start*/
    Route::get('manage-users','Admin\UserController@index')->name('manageUsers');
    Route::get('add-user','Admin\UserController@add')->name('addUser');
    Route::post('save-user','Admin\UserController@save')->name('saveUser');
    Route::get('edit-user/{id}','Admin\UserController@edit')->name('editUser');
    Route::post('update-user/{id}','Admin\UserController@update')->name('updateUser');
    Route::get('delete-user/{id}','Admin\UserController@delete')->name('deleteUser');
    Route::post('active-inactive-user/','Admin\UserController@status')->name('userStatus');
    /* Users route end*/
     /* Category route start*/
     Route::get('manage-category','Admin\CategoriesController@index')->name('manageCategory');
     Route::get('add-category','Admin\CategoriesController@add')->name('addCategory');
     Route::post('save-category','Admin\CategoriesController@save')->name('saveCategory');
     Route::get('edit-category/{id}','Admin\CategoriesController@edit')->name('editCategory');
     Route::post('update-category/{id}','Admin\CategoriesController@update')->name('updateCategory');
     Route::get('delete-category/{id}','Admin\CategoriesController@delete')->name('deleteCategory');
     Route::post('category-status/','Admin\CategoriesController@status')->name('categoryStatus');
     /* Category route end*/

     /* Category route start*/
     Route::get('manage-sub-category/{id}','Admin\CategoriesController@subCategory')->name('subCategory');
     Route::get('add-sub-category','Admin\CategoriesController@addSubCategory')->name('addSubCategory');
     Route::post('save-sub-category','Admin\CategoriesController@saveSubCategory')->name('saveSubCategory');
     Route::get('edit-sub-category/{id}','Admin\CategoriesController@editSubCategory')->name('editSubCategory');
     Route::post('update-sub-category/{id}','Admin\CategoriesController@updateSubCategory')->name('updateSubCategory');
     Route::get('delete-sub-category/{id}','Admin\CategoriesController@deleteSubCategory')->name('deleteSubCategory');
     Route::post('sub-category-status/','Admin\CategoriesController@statusSubCategory')->name('statusSubCategory');
     /* Category route end*/

});