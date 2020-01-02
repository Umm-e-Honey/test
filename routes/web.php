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


// admin
Route::get('/dashboard', [
	'uses' => 'UserController@index',
	'as'   => '/'
]);

Route::post('/login', [
	'uses' => 'UserController@login',
	'as'   => 'login'
]);

Route::post('/register', [
	'uses' => 'UserController@register',
	'as'   => 'register'
]);

Route::post('/logout', [
	'uses' => 'UserController@logout',
	'as'   => 'logout'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
