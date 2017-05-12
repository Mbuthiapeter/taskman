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
use App\Task;
use Illuminate\Http\Request;

Route::get('/', function(){
	return view('welcome');
});

Route::get('/tasks', 'TaskController@index');
Route::get('/allTasks', 'TaskController@all');
Route::get('/addTasks', 'TaskController@add');
Route::post('/task', 'TaskController@store');
Route::get('viewTask/{id}', 'TaskController@view');
Route::get('editTask/{id}', 'TaskController@edit');

Route::get('/manage', 'UsersController@manage');
Route::get('userHistory/{id}', 'TaskController@history');

Route::delete('/task/{task}', 'TaskController@destroy');
Route::auth();


