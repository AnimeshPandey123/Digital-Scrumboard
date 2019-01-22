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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/google', 'Auth\LoginController@redirectToProvider')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function(){
	Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
	Route::get('/setting', function () {
		return view('admin.setting');
	})->name('setting');
	Route::get('/project', 'Project\ProjectController@index')->name('project');
	Route::get('/project/get', 'Project\ProjectController@get')->name('project.get');
	Route::get('/project/store', 'Project\ProjectController@store')->name('project.store');

	Route::get('/project/main/{project_id}', 'Project\ProjectController@mainProject')->name('project.main');

	Route::get('/project/get/specific', 'Project\ProjectController@getProject')->name('project.specific');
	Route::get('/project/get/task', 'Project\ProjectController@getTask')->name('project.specific.task');

	Route::get('/project/update', 'Project\ProjectController@update')->name('project.update');


	Route::get('/task/{id}', 'Task\TaskController@index')->name('task.find');
	Route::get('/tasks/', 'Task\TaskController@tasks')->name('task.all');
	Route::get('/tasks/store/this', 'Task\TaskController@create')->name('task.store');
	Route::get('/tasks/update/', 'Task\TaskController@update')->name('task.update');
	Route::get('/tasks/position/update/', 'Task\TaskController@updatePosition')->name('task.update.position');

	Route::get('check/email', 'User\UserController@checkEmail')->name('check.email');

	Route::get('users/all', 'User\UserController@returnAllUsers')->name('');

	Route::get('/profile', function () {
		return view('admin.profile');
	})->name('profile');

	Route::get('/documentation/css', function(){
		return view('admin.documentation.css');
	})->name('css.documentation');
});


