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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'web'], function(){
	Route::get('test',[
		'as' 	=> 'test',
		'uses'	=> function(){
			return view('ohome');
		},
	]);

});

Route::group(['middleware' => ['auth']], function(){
	Route::resource('users', 'UsersController');
	Route::resource('roles', 'RolesController');
	Route::resource('admin', 'AdminPageController');

});