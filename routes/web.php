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

Route::get('/binder/{noteroom?}', 'BinderController@dashboard');
// Route::get('/binder', 'BinderController@dashboard');

Route::get('/about', function () {
	return view('about');
});

Route::get('/login', function () {
	return view('login')->name('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('note', 'NotesController');

Route::get("create", 'testing@index');

Route::post('something', 'NotesController@test')
  ->name('something');

Route::get('/noteroom/join', 'NoteroomController@join')->name('join');
Route::resource('noteroom', 'NoteroomController');
