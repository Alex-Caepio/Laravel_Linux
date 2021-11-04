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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/post/create','PostController@create')->name('post.create');

Route::post('/post','PostController@store')->name('post.store');
Route::get('/posts/{post}','PostController@show')->name('post.show');
Route::get('/posts/{post}/edit','PostController@edit')->name('post.edit');

Route::get('/posts/update','PostController@update');
Route::get('/posts/delete','PostController@delete');
Route::get('/posts/firstOrCreate','PostController@firstOrCreate');
Route::get('/posts/updateOrCreate','PostController@updateOrCreate');
Route::get('/posts/upsert','PostController@upsert');
Route::get('/posts1', 'PostsController@index')->name('post1.index');
Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/contacts', 'ContactController@index')->name('contact.index');
Route::get('/about', 'AboutController@index')->name('about.index');