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
//set timezone for your country------
date_default_timezone_set('Europe/Belgrade');

Route::get('/', function () {
	if (Session::has('logged')) {
		return redirect()->back();
	} else{
	    return view('welcome');
	}
});


Route::get('/home', 'HomeController@index');
Route::get('/about/', 'AboutController@index');
Route::get('/about/listPeople/{response}', 'AboutController@listPeople');
Route::get('/notifications', 'NotificationsController@index');
Route::get('/messages', 'SubmitControllers@index');
Route::get('/jobs/selected', 'JobsController@job');

Route::get('/jobs/create', 'JobsController@jobCreate');

Route::get('/error', function () {
    return view('error');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register'); 
});

Route::get('/home/nfeeds', 'HomeController@newerFeeds');

Route::get('/home/ofeeds', 'HomeController@olderFeeds');

Route::get('/posts/likes/{it}', 'PostsController@likes');

Route::post('/home/posts/', 'PostsController@postCreate'); 

Route::get('/users/account/{id}', 'UsersController@index');

Route::get('/users/dpro/{fname}{lname}-{id}', 'UsersController@listedUser');

Route::get('/users/account', 'UsersController@index');

Route::post('/login', 'LoginController@login');
Route::post('saveQuote/{id}', 'LoginController@saveQuote');
Route::post('register/create', 'RegisterController@create');
Route::get('/logout', 'LoginController@logout');

// Route::get('/messages/get', 'SubmitControllers@getMessages');
//create route post type when you create controller for form!!!
Route::post('contact/submit', 'SubmitControllers@submit');

