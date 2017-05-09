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

Route::get('/', function () {
	return view('welcome');
});


Route::get('/noteroom', function () {
	return view('notes');
});


// Route::get('/binder', function () {
//     return view('binder');
// });

Route::get('/binder', 'BinderController@dashboard');

Route::get('/about', function () {
	return view('about');
});

Route::get('/login', function () {
	return view('login')->name('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get("create", 'testing@index');

Route::post('something', 'TestNotesController@test')
  ->name('something');

// Route::post('something', function(Request $request) {
//   return $request->message;
//   // return "this is something";
// })->name('something');

