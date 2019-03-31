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



Auth::routes(['verify' => true]);

Route::middleware('verified')->group(function() {

    Route::resource('post', 'PostController');
    Route::resource('user', 'UserController');
    Route::get('post/search/{tag}', 'PostController@search');
});

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/', function () {
//    return view('welcome');
//});
