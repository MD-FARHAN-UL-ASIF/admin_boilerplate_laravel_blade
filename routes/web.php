<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::match (['get', 'post'], 'login', 'AdminController@login');
    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', 'AdminController@dashboard');
        Route::post('check_current_password', 'AdminController@checkCurrentPassword');
        Route::match(['get', 'post'],'update_password', 'AdminController@updatePassword');
        Route::match(['get', 'post'],'update_admin_details', 'AdminController@updateAdminDetails');
        Route::get('logout', 'AdminController@logout');

        //CMS PAGE
        Route::get('cms-page', 'CmsController@index');
        Route::post('update-cms-page-status', 'CmsController@update');
        Route::match(['get','post'], 'add-edit-cms-page/{id?}', 'CmsController@edit');
        Route::get('delete-cms-page/{id?}', 'CmsController@destroy');

        //subadmin
        Route::get('subadmins', 'AdminController@subadmins');
        Route::post('update-subadmin-status', 'AdminController@updateSubadminStatus');
        Route::match(['get','post'], 'add-edit-subadmin/{id?}', 'AdminController@addEditSubadmin');
        Route::get('delete-subadmin/{id?}', 'AdminController@deleteSubadmin');

    });
});