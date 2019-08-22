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
	
	Route::get('/', 'DashboardController@home');
	Route::resource('users','UsersController');
	Route::resource('roles','RolesController');
	Route::resource('permissions','PermissionController');
	
	
});