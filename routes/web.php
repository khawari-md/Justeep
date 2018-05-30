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
// Route::post('/cart','FormController@showCart');
Route::get('/cart/{id}', 'FormController@showCart');

Route::get('/updateProfile', 'PagesController@getUpdateProf');
Route::get('/loginin', 'PagesController@getLogin');
Route::get('/index','PagesController@getIndex');
Route::get('/profile','PagesController@getProfile');
Route::get('/submit','PagesController@getSubmit');
Route::get('/kategori','PagesController@getKategori');

Route::post('submit','FormController@submit');

Route::post('profiles/{user}', ['as' => 'profiles.edit', 'uses' => 'ProfileController@edit']);
Route::post('profiles/{user}/update', ['as' => 'profiles.update', 'uses' => 'ProfileController@update']);
Route::post('rating', ['as' => 'forms.transaksi', 'uses' => 'FormController@transaksi']);
Route::post('rating2', ['as' => 'forms.afttrx', 'uses' => 'FormController@afttrx']);

Route::resources([
	'forms' => 'FormController',
	'logins' => 'LoginController'
	// 'profiles' => 'ProfileController'
]);

