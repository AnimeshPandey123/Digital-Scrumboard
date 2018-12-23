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


Route::group(['prefix'=>'admin', 'middleware'=>['auth'], 'namespace' => 'Admin'], function(){
	Route::get('/dashboard', function () {
		return view('admin.dashboard');
	})->name('dashboard');
	Route::get('/setting', function () {
		return view('admin.setting');
	})->name('setting');
	Route::get('/project', function () {
		return view('admin.project');
	})->name('project');

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

