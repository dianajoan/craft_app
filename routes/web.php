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

Route::get('/', [
	'as' 	=> 'welcome',
	'uses' 	=> 'PagesController@home',
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'),function () {

	Route::get('users', [ 'as' => 'admin.user.index', 'uses' => 'UsersController@index']);
	Route::get('roles', 'RolesController@index');
	Route::get('roles/create', 'RolesController@create');
	Route::post('roles/create', 'RolesController@store');
	Route::get('users/{id?}/edit', 'UsersController@edit');
	Route::post('users/{id?}/edit','UsersController@update');
});