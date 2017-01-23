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
Route::get('/', 'HomeController@index');

Route::group(['namespace' => 'Admin'], function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('/admin/user', 'UserController@index')->name('getUserList');
    Route::get('/admin/user/list', 'UserController@index')->name('getUserList');
    Route::get('/admin/user/add', 'UserController@addUser')->name('addUser');

    Route::get('/admin/resto', 'RestaurantController@index')->name('getRestoList');
    Route::get('/admin/resto/list', 'RestaurantController@index')->name('getRestoList');

    Route::get('/admin/resto/add/step/{step?}', 'RestaurantController@getInfoStep')
        ->name('createResto')
        ->where(['step' => '[1-3]']);
    Route::post('/admin/resto/add/step/{step?}', 'RestaurantController@postInfoStep')
        ->name('createResto')
        ->where(['step' => '[1-3]']);
    Route::get('/admin/resto/add/done', 'RestaurantController@getInfoDone');
});

Route::group(['namespace' => 'Web'], function () {
    // Controllers Within The "App\Http\Controllers\Web" Namespace

});
