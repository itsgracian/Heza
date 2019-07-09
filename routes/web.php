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
Route::get('/', 'IndexController@index');
Route::resource('story', 'StoryController');
Route::post('/story/upload-image','StoryController@uploadImage')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{handle}','UserController@index');

