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
	Route::post('/project/store', 'Project\ProjectController@store')->name('project.create');

	Route::get('/project/main', function () {
		return view('admin.project.mainProject');
	})->name('project.main');

	Route::get('/profile', function () {
		return view('admin.profile');
	})->name('profile');

	Route::get('/documentation/css', function(){
		return view('admin.documentation.css');
	})->name('css.documentation');
});


