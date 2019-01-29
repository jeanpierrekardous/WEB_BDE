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
	session()->forget('name');
	session()->forget('role');
	session()->forget('local');
	session()->forget('iduser');
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

Route::get('idea', 'IdeaController@getIdea');

Route::get('events', 'EventsController@getEventPage');
Route::post('events', 'EventsController@addEventAdmin');
Route::get('signup/events/{n}', 'EventsController@getSignup')->where('n', '[0-9]+');

Route::get('events/{n}', 'EventsController@getPicture')->where('n', '[0-9]+');
Route::post('events/{n}', 'EventsController@postPicture')->where('n', '[0-9]+');

Route::get('events/like/{n}', 'EventsController@getLikePictureEvent')->where('n', '[0-9]+');

Route::get('events/comment/{n}', 'EventsController@getComment')->where('n', '[0-9]+');
Route::post('events/comment/{n}', 'EventsController@postComment')->where('n', '[0-9]+');
Route::get('events/delete/picture/{n}', 'EventsController@deletePicture')->where('n', '[0-9]+');
Route::get('events/comment/delete/{n}', 'EventsController@deleteComment')->where('n', '[0-9]+');
Route::get('events/delete/{n}', 'EventsController@deleteEvents')->where('n', '[0-9]+');
Route::get('events/comment/signal/{n}', 'EventsController@signalCommentary')->where('n', '[0-9]+');
Route::get('events/signal/picture/{n}', 'EventsController@signalPicture')->where('n', '[0-9]+');
Route::get('events/signal/{n}', 'EventsController@signalEve')->where('n', '[0-9]+');

Route::get('admin/account', 'AdminController@manageAccount');
Route::post('admin', 'AdminController@createAccount');

Route::get('CGV', function(){
	return view('CGV/cgv');
});

Route::get('CGU', function(){
	return view('CGU/cgu');
});

Route::get('PPD', function(){
	return view('PPD/ppd');
});

Route::get('admin', function(){
	return view('Admin/admin');
});

Route::get('shop', function(){
	return view('Shop/shop');
});

Route::get('writeidea', 'WriteideaController@getFormIdea');
Route::post('writeidea', 'WriteideaController@postFormIdea');

Route::get('idea/{n}', 'IdeaController@getLike')->where('n', '[0-9]+');
Route::get('idea/delete/{n}', 'IdeaController@getDelete')->where('n', '[0-9]+');

Route::get('idea/add/event/{n}', 'IdeaController@getEventByIdea')->where('n', '[0-9]+');
Route::post('idea/add/event/{n}', 'IdeaController@postEventByIdea')->where('n', '[0-9]+');
Route::get('idea/signal/{n}', 'IdeaController@getSignal')->where('n', '[0-9]+');