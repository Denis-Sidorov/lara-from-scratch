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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{slug}', 'TestController@test');

Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
Route::post('/articles', 'ArticleController@store')->name('articles.store');

Route::get('/articles', 'ArticleController@index')->name('articles.index');
Route::get('/articles/{article}', 'ArticleController@show');


Route::get('/articles/{article}/edit', 'ArticleController@edit')->name('articles.edit');
Route::put('/articles/{article}/update', 'ArticleController@update')->name('articles.update');

Route::delete('/articles/{article}', 'ArticleController@destroy')->name('articles.delete');
