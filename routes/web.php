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

// Route::get('/', function () {
// 	return view('welcome');
// });

Auth::routes();

Route::get('verify/{token}','VerifyController@verify')->name('verify');

// route::get('/home','HomeController@index')->name('home');
Route::get('/', 'PagesController@getIndex');
Route::get('/browse', 'FormController@show');
Route::get('/itemof', 'FormController@showof');
Route::get('/itemreq', 'FormController@showreq');

Route::get('/updateProfile', 'PagesController@getUpdateProf');
Route::get('/loginin', 'PagesController@getLogin');
Route::get('/index','PagesController@getIndex');
Route::get('/profile','PagesController@getProfile');
Route::get('/submit','PagesController@getSubmit');
Route::get('/cart','PagesController@getCart');
Route::get('/kota','PagesController@getKota');

Route::post('submit','FormController@submit');

Route::resources([
	'forms' => 'FormController',
	'logins' => 'LoginController',
	'profiles' => 'ProfileController'
]);