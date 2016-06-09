<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// LANDING PAGE ROUTE
Route::get('/', function () {
	return view('welcome');
});

// LARAVEL 5.2 AUTHENITCATION ROUTES
Route::auth();
Route::controllers([
	'auth' 			=> 'Auth\AuthController',
	'password' 		=> 'Auth\PasswordController',
]);

// LOGGED IN USER HOMEPAGE
Route::get('/home', 'HomeController@index');

// TIME TRACKER ROUTE
Route::get('tracker', ['middleware' => 'auth', function() {
    return view('pages.tracker');
}]);

// ROUTE GROUP THAT ALLOWS API PREFIX
Route::group(array('prefix' => 'api'), function() {
	Route::resource('time', 'TimeEntriesController');
	Route::resource('users', 'UsersController');
});