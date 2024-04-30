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

            //User
            Route::get('users', 'AdminController@Users');
            Route::match(['get','post'], 'add-edit-user/{user_id?}', 'AdminController@addEditUser');


                    //subadmin
            Route::group(['middleware' => ['adminAccessOnly']], function () {
                Route::get('subadmins', 'AdminController@subadmins');
                Route::post('update-subadmin-status', 'AdminController@updateSubadminStatus');
                Route::match(['get','post'], 'add-edit-subadmin/{id?}', 'AdminController@addEditSubadmin');
                Route::get('delete-subadmin/{id?}', 'AdminController@deleteSubadmin');
                Route::match(['get', 'post'], 'update-permission/{id}', 'AdminController@updatePermission');
            });

        });
    });

    //front
    Route::prefix('/user')->namespace('App\Http\Controllers\Front')->group(function(){
        Route::match(['get', 'post'], 'login', 'UserController@loginUser')->name('user.login');
    Route::match(['get', 'post'], 'register', 'UserController@registerUser')->name('user.register');
    Route::middleware('user')->group(function () {
        Route::get('index', 'UserController@index')->name('index');
    });
});

    Route::get('/admin/errors/error_403', function () {
        // Return the view for the 403 error page
        return view('admin.errors.error_403');
    })->name('admin.errors.error_403');