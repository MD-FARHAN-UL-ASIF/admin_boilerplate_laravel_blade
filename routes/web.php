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
            Route::post('update-user-status', 'AdminController@updateUserStatus');
            Route::get('delete-user/{user_id?}', 'AdminController@deleteUser');

            //project-form
            Route::get('project', 'AdminController@projectForm');
            Route::get('project-details/{id}', 'AdminController@projectFormById');

            //services
            Route::get('services', 'ServiceController@index');
            Route::match(['get', 'post'],'add-edit-service/{id?}', 'ServiceController@addEditService');
            Route::get('delete-service/{id?}', 'ServiceController@deleteService');


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
        Route::match(['get', 'post'], 'forgot-password', 'UserController@forgotPassword');
        Route::match(['get', 'post'], 'reset-password/{code?}', 'UserController@resetPassword');
        Route::get('project-form', 'UserController@projectForm');
        Route::get('project-form-step','UserController@projectForm_2');
        Route::post('project-form-submit','UserController@submitProjectForm');
        Route::middleware('user')->group(function () {
            Route::get('index', 'UserController@index')->name('user.index');
          //  Route::match(['get','post'], '')
            Route::get('logout', 'UserController@logoutUser');
    });
});


Route::prefix('/wise-corporation')->namespace('App\Http\Controllers\Front')->group(function(){
    Route::get('service','HomeController@service');
});

    Route::get('/admin/errors/error_403', function () {
        // Return the view for the 403 error page
        return view('admin.errors.error_403');
    })->name('admin.errors.error_403');


    Route::get('wise-corporation/index', function () {
    return view('wise_corporation.index');
});
Route::get('wise-corporation/project-profile', function () {
    return view('wise_corporation.project_profile');
});

Route::get('wise-corporation/category', function () {
    return view('wise_corporation.category');
});
// Route::get('wise-corporation/service', function () {
//     return view('wise_corporation.service');
// });
Route::get('wise-corporation/checkout', function () {
    return view('wise_corporation.checkout');
});

Route::get('wise-corporation/privacy-policy', function () {
    return view('wise_corporation.privacy_policy');
});

Route::get('wise-corporation/terms&condition', function () {
    return view('wise_corporation.terms');
});

Route::get('wise-corporation/refund-policy', function () {
    return view('wise_corporation.refund');
});

Route::get('wise-corporation/contact-us', function () {
    return view('wise_corporation.contact_us');
});

Route::get('wise-corporation/email', function () {
    return view('wise_corporation.email');
});

Route::get('wise-corporation/track-order', function () {
    return view('wise_corporation.track_order');
});
