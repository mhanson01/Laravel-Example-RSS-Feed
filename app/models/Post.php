<?php

class Post extends \Eloquent {

	protected $fillable = [
		'title',
		'body',
		'slug',
		'excerpt',
		'published_at'
	];

	public function getDates()
	{
		return ['published_at', 'created_at', 'updated_at'];
	}
}
