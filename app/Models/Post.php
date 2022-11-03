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

	public function __construct($title, $body, $date, $lead, $slug)
	{
		$this->title = $title;
		$this->body = $body;
		$this->date = $date;
		$this->lead = $lead;
		$this->slug = $slug;
	}

	static function all()
	{
		$files = File::files(resource_path("posts/"));

		$posts = [];

		foreach ($files as $file) {
			$object = YamlFrontMatter::parse($file->getContents());
			$post = new Post(
				$object->title,
				$object->body(),
				$object->date,
				$object->lead,
				$object->slug
			);
			$posts[] = $post;
		}
		return $posts;
	}

	static function find($slug)
	{
		$post = static::all();

		foreach ($post as $p) {
			if ($p->slug == $slug) {
				return $p;
			}
		}

		return abort(404, 'Sorry, that post was not found.');
	}
}
