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
    return view('admin.master_layout');
});

/*--------------------------------- phần Admin------------------------------------------*/

    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {

        Route::get('login','UserController@login')->name('login');
        Route::post('progressLogin','UserController@progressLogin')->name('progressLogin');
        Route::get('logout','UserController@logout')->name('logout');
        
       // Route::middleware('check_login')->group(function() {

        Route::prefix('user')->name('user.')->group(function() {
            Route::get('index','UserController@index')->name('index');
            Route::get('create','UserController@create')->name('create');
            Route::post('store','UserController@store')->name('store');
            Route::get('edit/{id}','UserController@edit')->name('edit');
            Route::post('update/{id}','UserController@update')->name('update');
            Route::get('destroy/{id}','UserController@destroy')->name('destroy');
        });

   // });
});


