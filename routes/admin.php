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

     Route::post('get-sub-category/','Admin\CategoriesController@getSubcategories')->name('getSubcategories');
     /* Category route end*/

     /* Sub Category route start*/
     Route::get('manage-sub-category/{id}','Admin\CategoriesController@subCategory')->name('subCategory');
     Route::get('add-sub-category/{id}','Admin\CategoriesController@addSubCategory')->name('addSubCategory');
     Route::post('save-sub-category','Admin\CategoriesController@saveSubCategory')->name('saveSubCategory');
     Route::get('edit-sub-category/{id}','Admin\CategoriesController@editSubCategory')->name('editSubCategory');
     Route::post('update-sub-category/{id}','Admin\CategoriesController@updateSubCategory')->name('updateSubCategory');
     Route::get('delete-sub-category/{id}','Admin\CategoriesController@deleteSubCategory')->name('deleteSubCategory');
     Route::post('sub-category-status/','Admin\CategoriesController@statusSubCategory')->name('statusSubCategory');
     /* Sub Category route end*/

     /* Doctor route start*/
     Route::get('manage-doctor','Admin\DoctorController@index')->name('manageDoctor');
     Route::get('add-doctor','Admin\DoctorController@add')->name('addDoctor');
     Route::post('save-doctor','Admin\DoctorController@save')->name('saveDoctor');
     Route::get('edit-doctor/{id}','Admin\DoctorController@edit')->name('editDoctor');
     Route::post('update-doctor/{id}','Admin\DoctorController@update')->name('updateDoctor');
     Route::get('delete-doctor/{id}','Admin\DoctorController@delete')->name('deleteDoctor');
     Route::post('doctor-status/','Admin\DoctorController@status')->name('doctorStatus');

     Route::get('doctor-gallery/{id}','Admin\DoctorController@gallery')->name('doctorGallery');
     Route::post('doctor-gallery-save/{id}','Admin\DoctorController@gallerySave')->name('doctorGallerySave');
     Route::get('doctor-gallery-delete/{id}','Admin\DoctorController@galleryDelete')->name('doctorGalleryDelete');
     /* Doctor route end*/
     /* Diagnostic route start*/
     Route::get('manage-diagnostic','Admin\DiagnosticController@index')->name('manageDiagnostic');
     Route::get('add-diagnostic','Admin\DiagnosticController@add')->name('addDiagnostic');
     Route::post('save-diagnostic','Admin\DiagnosticController@save')->name('saveDiagnostic');
     Route::get('edit-diagnostic/{id}','Admin\DiagnosticController@edit')->name('editDiagnostic');
     Route::post('update-diagnostic/{id}','Admin\DiagnosticController@update')->name('updateDiagnostic');
     Route::get('delete-diagnostic/{id}','Admin\DiagnosticController@delete')->name('deleteDiagnostic');
     Route::post('diagnostic-status/','Admin\DiagnosticController@status')->name('diagnosticStatus');

     Route::get('diagnostic-gallery/{id}','Admin\DiagnosticController@gallery')->name('diagnosticGallery');
     Route::post('diagnostic-gallery-save/{id}','Admin\DiagnosticController@gallerySave')->name('diagnosticGallerySave');
     Route::get('diagnostic-gallery-delete/{id}','Admin\DiagnosticController@galleryDelete')->name('diagnosticGalleryDelete');
     /* Diagnostic route end*/
     /* Hospital route start*/
     Route::get('manage-hospital','Admin\HospitalController@index')->name('manageHospital');
     Route::get('add-hospital','Admin\HospitalController@add')->name('addHospital');
     Route::post('save-hospital','Admin\HospitalController@save')->name('saveHospital');
     Route::get('edit-hospital/{id}','Admin\HospitalController@edit')->name('editHospital');
     Route::post('update-hospital/{id}','Admin\HospitalController@update')->name('updateHospital');
     Route::get('delete-hospital/{id}','Admin\HospitalController@delete')->name('deleteHospital');
     Route::post('hospital-status/','Admin\HospitalController@status')->name('hospitalStatus');

     Route::get('hospital-gallery/{id}','Admin\HospitalController@gallery')->name('hospitalGallery');
     Route::post('hospital-gallery-save/{id}','Admin\HospitalController@gallerySave')->name('hospitalGallerySave');
     Route::get('hospital-gallery-delete/{id}','Admin\HospitalController@galleryDelete')->name('hospitalGalleryDelete');
     /* Hospital route end*/
     /* CMS route start*/
     Route::get('manage-content/{page}','Admin\CmsController@index')->name('manageContent');
     Route::get('edit-content/{id}','Admin\CmsController@edit')->name('editContent');
     Route::post('update-content/{id}','Admin\CmsController@update')->name('updateContent');
     /* CMS route end*/

});