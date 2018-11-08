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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PostController@index')->name('welcome');

Route::resource('/posts', 'PostController');

Route::get('/posts/{id}/delete', 'PostController@confirmDelete');

// //
// Route::get('create', 'PostController@create')->name('post');
// //
// Route::get('/store', 'PostController@store')->name('/');
// //
// Route::post('/', 'PostController@store')->name('/');
//
// Route::get('/edit', 'PostController@edit')->name('post');
