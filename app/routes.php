<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

// Display all Posts as an example

Route::get('/', function()
{
	return Post::all();
});

Route::get('feed', 'RssController@index');
