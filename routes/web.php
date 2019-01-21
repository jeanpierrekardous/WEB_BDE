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
Route::get('login', function() {
	return view('UsersConnect/login');
});
Route::get('signup', function() {
	return view('UsersConnect/sign_up');

});
Route::get('info', function() {
	return view('Help/info');
});
Route::get('help', function() {
	return view('Help/help');
});