<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@index');
Route::get('index/{id}', 'PagesController@profile');
Route::get('/signup', 'PagesController@signUp');
Route::post('/', 'PagesController@store');

Route::get('/vefsida', 'PagesController@vefsidur');
Route::get('/create', 'PagesController@create');
Route::get('/vefsida/{id}', 'PagesController@show');
Route::post('/vefsida/{id}', 'PagesController@edited');
Route::post('/vefsida', 'PagesController@VefStore');
Route::get('/Edit/{id}', 'PagesController@edit');


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
