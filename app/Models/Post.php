<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{
    public $title;
    public $body;
    public $date;
    public $lead;
    public $slug;

    function __construct($title, $body, $date, $lead, $slug)
    {
        $this->title = $title;
        $this->body = $body;
        $this->date = $date;
        $this->lead = $lead;
        $this->slug = $slug;
    }

    static function all()
    {
        $files = File::files(resource_path('/posts'));

        $posts = [];

        foreach ($files as $file) {
            //$posts[] = $file->getContents();
            $object = YamlFrontMatter::parse($file->getContents());
            $post = new Post(   $object->title,
                                $object->body(),
                                $object->date,
                                $object->lead,
                                $object->slug);
            $posts[] = $post;
        }

        $postCollections = collect($posts)->sortBy('date');

        return $posts;
    }

    static function find($slug)
    {
        $posts = static::all();

        foreach ($posts as $post) {
            if ($post->slug == $slug) {
                return $post;
            }
        }

        return null;
    }
}
