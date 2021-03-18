<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('master_layout');
// });

Route::get('/', function () {
    return view('admin.login');
});

/*--------------------------------- phần Admin------------------------------------------*/

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {

      Route::get('login','UserController@login')->name('login');
      Route::post('progressLogin','UserController@progressLogin')->name('progressLogin');
      Route::get('logout','UserController@logout')->name('logout');  

      Route::middleware('check_login')->group(function() {

        Route::prefix('user')->name('user.')->group(function() {
            Route::get('index','UserController@index')->name('index');
            Route::get('create','UserController@create')->name('create');
            Route::post('store','UserController@store')->name('store');
            Route::get('edit/{id}','UserController@edit')->name('edit');
            Route::post('update/{id}','UserController@update')->name('update');
            Route::get('destroy/{id}','UserController@destroy')->name('destroy');
        });
        Route::prefix('category')->name('category.')->group(function() {
            Route::get('index','CategoryController@index')->name('index');
            Route::get('create','CategoryController@create')->name('create');
            Route::post('store','CategoryController@store')->name('store');
            Route::get('edit/{id}','CategoryController@edit')->name('edit');
            Route::post('update/{id}','CategoryController@update')->name('update');
            Route::get('destroy/{id}','CategoryController@destroy')->name('destroy');
        });
        Route::prefix('type-of-news')->name('type-of-news.')->group(function() {
            Route::get('index','ControllerTypeOfNews@index')->name('index');
            Route::get('create','ControllerTypeOfNews@create')->name('create');
            Route::post('store','ControllerTypeOfNews@store')->name('store');
            Route::get('edit/{id}','ControllerTypeOfNews@edit')->name('edit');
            Route::post('update/{id}','ControllerTypeOfNews@update')->name('update');
            Route::get('destroy/{id}','ControllerTypeOfNews@destroy')->name('destroy');
        });
        Route::prefix('news')->name('news.')->group(function() {
            Route::get('index','NewsController@index')->name('index');
            Route::get('create','NewsController@create')->name('create');
            Route::post('store','NewsController@store')->name('store');
            Route::get('edit/{id}','NewsController@edit')->name('edit');
            Route::post('update/{id}','NewsController@update')->name('update');
            Route::get('destroy/{id}','NewsController@destroy')->name('destroy');
        });
    });
 });


