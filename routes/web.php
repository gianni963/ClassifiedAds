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
use App\Ad;

Route::get('/', 'AdsController@index')->name('home');
Route::get('/ads/create','AdsController@create');
Route::post('/ads', 'AdsController@store');
Route::get('/ads/{ad}','AdsController@show');
Route::get('/ads/tags/{tag}','TagsController@index');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/about', function(){
	$name='Gianni';
	return view('about', ['prenom'=>$name] );
});

