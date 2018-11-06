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
Route::get('/', 'WebPageController@index');
Route::get('/index', 'WebPageController@index');
Route::get('/home', 'WebPageController@home');
Route::get('/aboutus', 'WebPageController@aboutus');
Route::get('/contactus', 'WebPageController@contactus');
Route::get('/ourteam', 'WebPageController@ourteam');
Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
