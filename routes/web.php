<?php

use App\Models\Post;
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
    // return ['egy','kettő','három'];
    // return 'Hello World';

    return view('welcome');
});

Route::get('/help', function() {
    return view("help");
});

Route::get('/posts', function() {

    $posts = Post::all();

    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('/posts/{post}', function($post) {

    $post = Post::find($post);

    return view('post', ['post' => $post]);
});

Route::get('/info', function() {
    phpinfo();
});
