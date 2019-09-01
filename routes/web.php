<?php

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

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get ('/pending', 'HomeController@pending')->name('pending');
    Route::group(['middleware' => ['approved']], function(){
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/lot', 'HomeController@lot')->name('lot');
        Route::get('/house', 'HomeController@house')->name('house');
    });
});
