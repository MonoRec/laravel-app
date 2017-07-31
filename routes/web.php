<?php
//
use App\Post;
use App\User;

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
//    $results = DB::select('select * from posts where id=?', [6]);
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


Route::get('/create', function () {

    Post::create([
        'title' => 'dsdasdasadasdasdsa',
        'description' => 'dasd sad sa sa sa'
    ]);

});

Route::get('/update', function () {

    Post::where('id', 3)->where('is_admin', 0)->update([
        'title' => 'xd',
        'description' => 'yyydsayyyy'
    ]);

});

Route::get('/delete', function () {
    Post::destroy([10, 5]);
});

Route::get('/softdelete', function () {
    Post::find(10)->delete();
});

Route::get('/show', function () {
    return Post::onlyTrashed()->get();
});

//delete all deleted items
Route::get('/restore', function () {
    return Post::withTrashed()->where('is_admin', '0')->restore();

});

Route::get('/forcedelete', function () {
    return Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
});


/*
|--------------------------------------------------------------------------
| Relationship One to One
|--------------------------------------------------------------------------
*/
Route::get('/user/{id}/post', function () {
    $result = Post::find(1)->user;
    return ($result);
});


/*
|--------------------------------------------------------------------------
| Relationship One to One inverse
|--------------------------------------------------------------------------
*/
Route::get('/user/{id}/post2', function () {
    $result = Post::find(1)->user;
    return ($result);
});


/*
|--------------------------------------------------------------------------
| Relationship One to Many
|--------------------------------------------------------------------------
*/
Route::get('/postsss', function () {
    $user = User::find(1);
    foreach ($user->posts as $post) {
        echo $post->title . "- ";
    }
});


/*
|--------------------------------------------------------------------------
| Relationship Many to Many
|--------------------------------------------------------------------------
*/
Route::get('/user/{id}/role', function ($id) {
    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();

    return $user;

//    foreach($user->roles as $role) {
//        echo $role->name." - ";
//    }


//    foreach($user->posts as $post) {
//        echo $post->title;
//    }

});

