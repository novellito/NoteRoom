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

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/userdashboard', 'UserController@dashboard');


/*
|--------------------------------------------------------------------------
| Noteroom Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/noteroom', function () {
	return view('notes');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get("create", 'testing@index');

