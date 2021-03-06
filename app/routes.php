<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::route('login');
});

Route::get('login', array(
	'as' => 'login', 
	'uses' => 'Auth_SessionController@getLogIn'));
	
Route::post('login', array(
	'as' => 'login', 
	'uses' => 'Auth_SessionController@postLogIn'));

Route::group(array('before' => 'auth'), function()
{
	Route::get('logout', array(
		'as' => 'logout', 
		'uses' => 'Auth_SessionController@logOut'));		
});
