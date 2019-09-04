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

Auth::routes(['verify' => true]);
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

Route::group(['middleware' => 'auth'], function(){
	//
});

Route::group(['middleware' => ['auth','verified']], function(){
	Route::resource('users', 'UserController');
	Route::resource('roles', 'RoleController');

	/*	custom users	*/
		Route::get('admin-dashboard-users',[
			'as'	=> 'user.index',
			'uses'	=> 'UserController@index',
		]);
		Route::get('admin-dashboard-user-create',[
			'as'	=> 'user.create',
			'uses'	=> 'UserController@create',
		]);
		Route::get('admin-dashboard-users-{id}',[
			'as'	=> 'user.show',
			'uses'	=> 'UserController@show',
		]);
		Route::get('admin-dashboard-user-edit-{id}',[
			'as'	=> 'user.edit',
			'uses'	=> 'UserController@edit',
		]);
	/*	/end of users	*/

	/*	custom roles	*/
		Route::get('admin-user-roles',[
			'as'	=> 'role.index',
			'uses'	=> 'RoleController@index',
		]);
		Route::get('admin-user-role-create',[
			'as'	=> 'role.create',
			'uses'	=> 'RoleController@create',
		]);
		Route::get('admin-user-roles-{id}',[
			'as'	=> 'role.show',
			'uses'	=> 'RoleController@show',
		]);
		Route::get('admin-user-role-edit-{id}',[
			'as'	=> 'role.edit',
			'uses'	=> 'RoleController@edit',
		]);
	/*	/end of roles	*/

	Route::get('admin-dashboard',[
		'as'	=> 'admin',
		'uses'	=> 'AdminPageController@index',
	]);
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