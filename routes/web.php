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

	Route::get('/about', [
	'as' 	=> 'about',
	'uses' 	=> 'PagesController@about',
	]);
	
	Route::get('/blog', [
	'as'  => 'blog',
	'uses' => 'PagesController@blog',
	]);

	Route::get('/contact', [
	'as'  => 'contact',
	'uses' => 'PagesController@contact',
	]);
});

Route::group(['middleware' => ['auth']], function(){
	Route::resource('users', 'UsersController');
	Route::resource('roles', 'RolesController');
	Route::resource('admin', 'AdminPageController');


	Route::get('home-profile', [
		'as'	=> 'profile',
		'uses'	=> 'UserPageController@profile',
	]);
	Route::post('home-profile', [
		'as'	=> 'profile.update',
		'uses'	=> 'UserPageController@update_image'
	]);
	Route::post('home-profile-password', [
		'as'	=> 'password.update',
		'uses'	=> 'UserController@changePassword'
	]);
});