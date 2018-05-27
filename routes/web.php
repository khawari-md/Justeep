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

Route::get('verify/{token}','VerifyController@verify')->name('verify');
Route::get('/', 'PagesController@getIndex');
Route::get('/browse', 'PagesController@getBrowse');
Route::get('/itemof', 'PagesController@getItemOf');
Route::get('/itemreq', 'PagesController@getItemReq');
Route::get('/login', 'PagesController@getLogin');
Route::get('/index','PagesController@getIndex');
Route::get('/profile','PagesController@getProfile');
Route::get('/submit','PagesController@getSubmit');

Route::resource('logins', 'LoginController');