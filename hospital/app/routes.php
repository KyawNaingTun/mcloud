<?php

// =============================================
// API ROUTES ==================================
// =============================================
Route::group(array('prefix' => 'api'), function() {

	// since we will be using this just for CRUD, we won't need create and edit
	// Angular will handle both of those forms
	// this ensures that a user can't access api/create or api/edit when there's nothing there
	Route::resource('comment', 'CommentController', 
		array('except' => array('create', 'edit', 'update')));
});

Route::group(array('prefix' => 'api','before' => 'auth'), function() {

	// since we will be using this just for CRUD, we won't need create and edit
	// Angular will handle both of those forms
	// this ensures that a user can't access api/create or api/edit when there's nothing there
	Route::resource('posts', 'PostController', 
		array('except' => array('create', 'edit', 'update')));
});

// =============================================
// CATCH ALL ROUTE =============================
// =============================================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
App::missing(function($exception)
{
	return View::make('index');
});


//  included routes
require_once app_path().'/routes/pages.php';
require_once app_path().'/routes/user.php';
require_once app_path().'/routes/post.php';