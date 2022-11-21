<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

// Alice: Hi Bob, I have a question about the Laravel framework.
// Bob: Hi Alice, what's up?
// Alice: I'm trying to understand how the routing works in Laravel.
// Bob: Ok, let's see.
// Alice: I have a route like this: Route::get('/posts/{post:slug}', function(Post $post) { ... }).
// Bob: Ok, what's the problem?
// Alice: I don't understand how the Post $post parameter works.
// Bob: Ok, let's see. The route is defined like this: Route::get('/posts/{post:slug}', function(Post $post) { ... }).
// Alice: Yes, I know.
// Bob: So, the {post:slug} part is a route parameter.
// Alice: Yes, I know. I read about it in the documentation.
// Bob: Ok, so, the {post:slug} part is a route parameter. The {post} part is the name of the parameter.
// Alice: Yes, I know. Bob you are repeating yourself.
// Dany: Hi Alice, what's up?
// Alice: I'm trying to understand how the routing works in Laravel.
// Bob: Dany, can you please leave us alone?
// Dany: Ok, sorry.
