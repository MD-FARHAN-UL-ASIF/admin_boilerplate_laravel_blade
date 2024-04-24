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
    });
});