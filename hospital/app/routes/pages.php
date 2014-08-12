<?php
// =============================================
// HOME PAGE ===================================
// =============================================
Route::get('/', function()
{
	return View::make('home');
});


Route::get(
	'/', array('before' => 'auth|is_pro', 'uses' => 'PageController@showHome')
);

Route::get(
	'/register', array('uses' => 'PageController@showRegister')
);


