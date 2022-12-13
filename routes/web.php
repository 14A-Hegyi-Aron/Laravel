<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

// Route::get('/', function () {
//     // return ['egy','kettő','három'];
//     // return 'Hello World';

//     return view('welcome');
// });

// Route::get('/help', function() {
//     return view("help");
// });

Route::get('/', function() {

    $posts = Post::all();

    return view('posts', [
        'posts' => $posts
    ]);
});


Route::get('/posts/{post:slug}', function(Post $post) {

    // $post = Post::find($post);

    return view('post', ['post' => $post]);
});

Route::get('/info', function() {
    return phpinfo();
});

Route::get('/categories/{category:slug}', function(Category $category) {

    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('/authors/{user}', function(User $user) {

    return view('posts', [
        'posts' => $user->posts
    ]);
});
