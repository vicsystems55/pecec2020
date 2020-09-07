<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth','author','verified'], 'prefix' => 'author'], function(){

    Route::get('/', 'AuthorPageController@index')->name('author');
	
});

Route::group(['middleware' => ['auth','admin','verified'], 'prefix' => 'admin'], function(){

	Route::get('/', 'AdminPageController@index');	
	
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('blog/about', function () {
    return view('blog.about');
});

Route::get('blog/blog-single', function () {
    return view('blog.blog-single');
});

Route::get('blog/categories', function () {
    return view('blog.categories');
});

Route::get('blog/contact', function () {
    return view('blog.contact');
});

Route::get('blog/index', function () {
    return view('blog.index');
});

Route::get('/choose', 'ChooseRoleController@index');

Route::get('/default', function () {
    return view('default');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});







