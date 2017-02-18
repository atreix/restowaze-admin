<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

# Main site
Route::get('/', 'MainController@index');
Route::get('/home', 'MainController@index')->name('restowaze-path');
Route::get('/detail/{id}', 'MainController@showDetails');
Route::post('/detail/{id}', 'MainController@createReview')->name('write-review');

# Sign in
Route::get('/signin', 'SignInController@index')->name('sign-in');
Route::post('/signin', 'SignInController@doSignin')->name('sign-in');
Route::get('/registration', 'SignInController@register')->name('registration');
Route::post('/registration', 'SignInController@saveregister')->name('registration');


# Admin site
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    # dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    # user
    Route::get('/user', 'UserController@index')->name('getUserList');
    Route::get('/user/list', 'UserController@index');
    Route::get('/user/search', 'UserController@search');

    # add
    Route::get('/user/add', 'UserController@addUserInfo')
        ->name('add-user-info');
    Route::post('/user/add', 'UserController@saveUserInfo');

    # edit
    Route::get('/user/update/{id}', 'UserController@updateUser')
        ->name('edit-user-info');
    Route::post('/user/update/{id}', 'UserController@updateUserInfo')
        ->name('save-update-user-info');

    # delete
    Route::get('/user/delete/{id}', 'UserController@deleteUser')
        ->name('delete-user-info');
    Route::post('/user/delete/{id}', 'UserController@deleteUserInfo');

    # resto
    Route::get('/resto', 'RestaurantController@index')->name('getRestoList');
    Route::get('/resto/list', 'RestaurantController@index');
    Route::get('/resto/search', 'RestaurantController@search');

    # add
    Route::get('/resto/add/basic-info', 'RestaurantController@addBasicInfo')
        ->name('add-basic-info');
    Route::post('/resto/add/basic-info', 'RestaurantController@saveBasicInfo');

    Route::get('/resto/add/menu', 'RestaurantController@addMenu');
    Route::post('/resto/add/menu', 'RestaurantController@saveMenu');

    # edit
    Route::get('/resto/update/{id}', 'RestaurantController@updateBasicInfo')
        ->name('edit-basic-info');
    Route::post('/resto/update/{id}', 'RestaurantController@saveUpdateBasicInfo');

    # delete
    Route::get('/resto/delete/{id}', 'RestaurantController@deleteRestaurant')
        ->name('delete-basic-info');
    Route::post('/resto/delete/{id}', 'RestaurantController@deleteRestaurantInfo');

    Route::get('/resto/add/upload-menu', 'RestaurantController@uploadMenu')
        ->name('upload-menu');
    Route::post('/resto/add/upload-menu', 'RestaurantController@saveUploadMenu');
});
