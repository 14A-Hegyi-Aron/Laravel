<?php

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
    return view('welcome');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/posts/{post}', function ($post) {
    $file = __DIR__ . "/../resources/posts/{$post}.html";
    if (!file_exists($file)) {
        return redirect('/');
        abort(404, 'Sorry, the post was not found: ' . $post);
    }

    $post = file_get_contents($file);

    return view('post', [
        'post' => $post
    ]);
});
