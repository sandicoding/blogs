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

//User group
Route::group(['namespace' => 'User'], function () {

	//route home blog
	Route::get('/','HomeController@index')->name('home_user');
	//route post blog
	Route::get('/post/{post}','PostController@post')->name('post');

	Route::get('/post/tag/{tag}', 'HomeController@tag')->name('tag');
	Route::get('/post/category/{category?}', 'HomeController@category')->name('category');

});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
	
	//route admin home

	Route::get('admin/home', 'HomeController@index')->name('admin.home');
	// route admin users
	Route::resource('admin/user', 'UserController');
	//route admin post
	Route::resource('admin/post', 'PostController');
	//route admin tag
	Route::resource('admin/tag', 'TagController');
	//route admin category
	Route::resource('admin/category', 'CategoryController');
	//ROUTE ADMIN login 
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');

});



// Route::get('/admin/home', function() {
// 	return view('admin/home');
// })->name('admin.home');



// Route::get('/admin/tag', function() {
// 	return view('admin/tag/tag');
// })->name('admin.tag');

// Route::get('/admin/category', function() {
// 	return view('admin/category/category');
// })->name('admin.category');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
