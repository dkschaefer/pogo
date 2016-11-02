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
    return view('home');
});

Route::get('post/{id}', function($id) {
	$post = App\Post::find($id);
	echo $post->name;
});

//list all posts
Route::get('posts', function() {
	$posts = App\Post::all();
	foreach($posts as $post){
		$user = App\User::find($post->user_id);
		echo $post->title . ' created by ' . $user->name . '<br>';
	}
});


// list user info
Route::get('user/{id}','UserController@user');


//list all user names
Route::get('users', function() {
	$users = App\User::all();
	foreach($users as $user){
		echo $user->name . '<br>';
	}
});

Auth::routes();

Route::get('/home','HomeController@index');
