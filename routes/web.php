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

Route::get('/', 'HomeController@home');
Route::get('/books/index', 'BookController@index')->name('index_book');
Route::get('/books/create', 'BookController@create')->name('create_book');
Route::post('/books/store', 'BookController@store')->name('store_book');

//searching route
Route::post('/search', 'SearchController@search')->name('search');
