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
Route::get('/admin/logout', 'Auth\LoginController@logout');
Route::get('/admin', 'HomeController@index');


Route::group(['namespace' => 'Admin'], function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('/user', 'UserController@index')->name('getUserList');
    Route::get('/user/list', 'UserController@index')->name('getUserList');
    Route::get('/user/add', 'UserController@addUser')->name('addUser');
});

Route::group(['namespace' => 'Web'], function () {
    // Controllers Within The "App\Http\Controllers\Web" Namespace

});
