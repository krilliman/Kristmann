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
Route::get('/verktakar', 'PagesController@verktak');


Route::get('/create', 'PagesController@create');
Route::get('/createverk', 'PagesController@createverk');

Route::get('/vefsida/{id}', 'PagesController@show');

Route::get('/verktakar/{id}', 'PagesController@showverk');

Route::post('/vefsida', 'PagesController@VefStore');
Route::post('/verktakar', 'PagesController@VerkStore');

Route::post('/setphoto', 'PagesController@PhotoId');
Route::post('/VefsaveComment', 'PagesController@vefComments');
Route::post('/VerksaveComment', 'PagesController@verkComments');

Route::post('/reddescrip', 'PagesController@editDescription');


Route::post('/vefsida/{id}', 'PagesController@vefedited');
Route::get('/Vefsida/Edit/{id}', 'PagesController@vefedit');
Route::post('/verktakar/{id}', 'PagesController@verkedited');
Route::get('/Verktakar/Edit/{id}', 'PagesController@verkedit');



Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
