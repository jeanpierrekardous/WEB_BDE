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
Route::get('login', 'LoginController@getLoginForm');
Route::post('login', 'LoginController@postLoginForm');

Route::get('signup', 'SignupController@getForm');
Route::post('signup', 'SignupController@postForm');

Route::get('logout', function(){
	session()->forget('email');
	session()->flush();
	return redirect('/');
});

Route::get('info', function() {
	return view('Help/info');
});
Route::get('help', function() {
	return view('Help/help');
});
Route::get('right', function(){
	return view('Right/right');
});

Route::get('contact', 'ContactController@getContact');
Route::post('contact', 'ContactController@postContact');

Route::get('idea', 'IdeaController@getIdea');

Route::get('events', 'EventsController@getEventPage');

Route::get('CGV', function(){
	return view('CGV/cgv');
});

Route::get('CGU', function(){
	return view('CGU/cgu');
});

Route::get('PPD', function(){
	return view('PPD/ppd');
});

Route::get('writeidea', 'WriteideaController@getFormIdea');
Route::post('writeidea', 'WriteideaController@postFormIdea');

Route::get('idea/{n}', 'IdeaController@getLike')->where('n', '[0-9]+');
