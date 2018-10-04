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

Route::get('/', 'PagesController@index');
Route::get('/article', 'PagesController@article');
Route::get('/article/create', 'PagesController@create' );
Route::get('/about', 'PagesController@about');
Route::get('/recipes', 'PagesController@recipes');
Route::get('/categories', 'PagesController@categories');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostsController');
