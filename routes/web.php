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

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name.' with id '.$id;
});

//The Laravel Project
Route::get('/nikosapp', 'PagesController@index');
Route::get('/nikosapp/index', 'PagesController@index');
Route::get('/nikosapp/home', 'PagesController@home');
Route::get('/nikosapp/about', 'PagesController@about');
Route::get('/nikosapp/services', 'PagesController@services');
Route::get('/nikosapp/message', 'MessagesController@messageForm');

Route::get('/posts/index', 'PostsController@index');
Route::get('/posts/show/{id}', 'PostsController@show');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts/store', 'PostsController@store'); // I need a Post Route
Route::get('/posts/edit/{id}', 'PostsController@edit');
Route::post('/posts/update/{id}', 'PostsController@update'); // I need a Post Route
Route::delete('/posts/delete/{id}', 'PostsController@destroy'); // I need a Delete Route

Route::post('/nikosapp/storeMessage/', 'MessagesController@storeMessage'); // I need a Store Message Route
Route::get('/nikosapp/showMessages/', 'MessagesController@showMessages')->middleware('auth'); //WATCH THE METHOD

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


