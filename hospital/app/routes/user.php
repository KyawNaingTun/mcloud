<?php

Route::get(
        '/register', array('uses' => 'PageController@showRegister')
);

Route::get(
        '/login', array('uses' => 'PageController@showLogin')
);

Route::get('/logout', function(){
	Auth::logout();
    return Redirect::to( '/login' );
});


Route::group(array('prefix' => 'user'), function() {
	// to show a register form
	Route::get(
	        '/create', array('uses' => 'UserController@showRegister')
	);
	// to register a user
	Route::post(
	        '/create', array('uses' => 'UserController@doRegister')
	);
	// to login a user
	Route::post(
	        '/login', array('uses' => 'UserController@doLogin')
	);
         
});

