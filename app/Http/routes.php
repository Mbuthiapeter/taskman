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

Route::get('/', 'PagesController@index');

Route::get('blade','PagesController@blade');

Route::get('users/create', ['uses' => 'UsersController@create']);

Route::post('users', ['uses' => 'UsersController@store']);


/*
Route::get('users',function(){
$users = [
	'0' => [
	'first_name' => 'Peter',
	'last_name' => 'mbuthia',
	'location' => 'Nairobi'
	],
	'1' => [
	'first_name' => 'Fridah',
	'last_name' => 'Kinya',
	'location' => 'Meru'
	]
	];
	return $users;
});
*/


Route::auth();

Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'authenticated'], function(){
	Route::get('profile','PagesController@profile');
	Route::get('settings', 'PagesController@settings');
	Route::get('users', 'UsersController@index');
});
