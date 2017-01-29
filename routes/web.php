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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    # user
    Route::get('/user', 'UserController@index')->name('getUserList');
    Route::get('/user/list', 'UserController@index')->name('getUserList');
    Route::get('/user/add', 'UserController@addUser')->name('addUser');

    # resto
    Route::get('/resto', 'RestaurantController@index')->name('getRestoList');
    Route::get('/resto/list', 'RestaurantController@index')->name('getRestoList');

    # add
    Route::get('/resto/add/basic-info', 'RestaurantController@addBasicInfo')
        ->name('add-basic-info');
    Route::post('/resto/add/basic-info', 'RestaurantController@saveBasicInfo');

    # edit
    Route::get('/resto/update/{id}', 'RestaurantController@updateBasicInfo')
        ->name('edit-basic-info');
    Route::post('/resto/update/{id}', 'RestaurantController@saveUpdateBasicInfo');

    Route::get('/resto/add/upload-menu', 'RestaurantController@uploadMenu')
        ->name('upload-menu');
    Route::post('/resto/add/upload-menu', 'RestaurantController@saveUploadMenu');
});
