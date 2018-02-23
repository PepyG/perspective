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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');
Route::post('/posts/create', 'PostsController@store');
Route::get('/posts/edit', 'PostsController@edit');
Route::delete('/posts/{post}', 'PostsController@delete');

Route::get('/asd',function (){

} );

Route::get('/category', 'CategoriesController@index');
Route::get('/category/create', 'CategoriesController@create');
Route::post('/category/create', 'CategoriesController@store');
//Route::get('/category/{category}', 'CategoryController@edit');
//Route::get('/category/{category}', 'CategoryController@delete');
//
//Route::resource('categories', 'CategoryController');