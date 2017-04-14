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
| Noteroom Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
	return view('welcome');
});


Route::get('/noteroom', function () {
	return view('notes');
});

Route::get('/binder', function () {
	return view('binder');
});
