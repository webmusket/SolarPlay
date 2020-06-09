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

Route::get(
    'cache-clear',
    function () {
        \Artisan::call('config:clear');
        return "clear";
    }
);
Route::get(
    'drop',
    function () {
        Schema::dropIfExists('users');
        return "clear";
    }
);

Route::get(
    'migrate',
    function () {
        \Artisan::call('migrate');
        return redirect()->back();
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
