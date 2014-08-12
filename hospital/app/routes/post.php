<?php
Route::group(array('prefix' => 'post'), function() {
	// to show all posts
	Route::get(
	        '/', array('uses' => 'PostController@showPost')
	);
	// to create a post
	Route::post(
	        '/', array('uses' => 'PostController@createPost')
	);
	// to update a post
	Route::put(
	        '/{id}', array('uses' => 'PostController@updatePost')
	);
	// to delete a post
	Route::delete(
	        '/{id}', array('uses' => 'PostController@deletePost')
	);
         
});