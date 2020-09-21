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

Route::get('/news', function () {


    $client = new \GuzzleHttp\Client();
    $request = $client->get('http://newsapi.org/v2/top-headlines?country=ng&apiKey=142b1d002c5d4e4aac719268900fb37d');
    $response = $request->getBody()->getContents();

    $response = json_decode($response);
    
    dd($response);

    

});

Route::get('/generate_post', 'GeneratePostController@generate_post');


Route::group(['middleware' => ['auth','author','verified'], 'prefix' => 'author'], function(){

    Route::get('/', 'AuthorPageController@index')->name('author');
    Route::get('/create_post', 'AuthorPageController@create_post')->name('author.create_post');
    Route::get('/profile', 'AuthorPageController@profile')->name('author.profile');
	
});

Route::group(['middleware' => ['auth','admin','verified'], 'prefix' => 'admin'], function(){

    Route::get('/', 'AdminPageController@index');
    Route::get('/author_p', 'AdminPageController@author_profile')->name('author.profile');		
	
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

Route::get('/blog/index', 'FrontPageController@index')->name('blog.home');


Route::get('blog/author_profile/{id}', function () {
    return view('blog.author');
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







