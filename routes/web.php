<?php
//
use App\Post;
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::resource('/posts', 'Posts\PostController');
//
//Route::get('/contact', 'Posts\PostController@contact')->name('contact.show');
//
//Route::get('/post/{id}/{name}/{password}', 'Posts\PostController@show_post')->name('post.show');
//
//
//Route::get('/insert', function() {
//    DB::insert('insert into posts (title,description) values(?,?)',['phdp','testesttetdsdsads']);
//});
//
//
///*
//|--------------------------------------------------------------------------
//| CRUD
//|--------------------------------------------------------------------------
//*/
//
//Route::get('/show', function() {
//    $results = DB::select('select * from posts where id=?', [1]);
//    return $results;
//});
//
//
//Route::get('/update', function() {
//   $updated = DB::update('update posts set title="Updated title" where id = ?',[1]);
//   return $updated;
//});
//
//
//Route::get('/delete', function() {
//    return DB::delete('delete from posts where id = ?', [1]);
//});
//
//
//
//
///*
//|--------------------------------------------------------------------------
//| elq
//|--------------------------------------------------------------------------
//*/
//
//
//Route::get('/find', 'Posts\PostController@getAll')->name('posts.all');
//
//
//
//Route::get('/findmore', function() {
//
////    $posts = Post::findOrFail(3);
//
//        $posts = Post::where('users_count','<','50')->firstOrFail();
//
//    return $posts;
//});

//Route::get('/bacis', function() {
//
//    $post = new Post;
//
//    $post->title = 'New title';
//    $post->description = 'dsadsadasdsa';
//    $post->save();
//
//});
//
//Route::get('/update', function() {
//
//    $post = Post::find(3);
//
//    $post->title = 'New titdasdasdasdsle';
//    $post->description = 'dsadsadasdsa';
//    $post->save();
//
//});



Route::get('/create', function() {

    Post::create([
        'title' => 'dsdasdasadasdsa',
        'description' => 'dasd sad sa sa sa'
    ]);

});

Route::get('/update', function() {

    Post::where('id',3)->where('is_admin', 0)->update([
        'title'=>'xd',
        'description'=>'yyyyyyy'
    ]);

});