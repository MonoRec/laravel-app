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

Route::resource('/posts', 'Posts\PostController');

Route::get('/contact', 'Posts\PostController@contact')->name('contact.show');

Route::get('/post/{id}/{name}/{password}', 'Posts\PostController@show_post')->name('post.show');



Route::get('/insert', function() {

    DB::insert('insert into posts (title,description) values(?,?)',['phdp','testesttetdsdsads']);

});