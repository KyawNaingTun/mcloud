<?php

class UserController extends BaseController {

	

	/*
	* Display registration form
	*/
	public function showRegister()
	{
		return View::make('register');
	}

	/**
	 * Register a user
	 *
	 *
	 */
	public function doRegister()
	{
		$validationRules = array(
	    	'fullname' => 'required|min:3',
	        'email' => 'required|unique:users|email',
	        'password' => 'required|min:6',
	        'confirm-password' => 'required|same:password'
	    );
	    // Set validation rules
	    $message = array(
	    	'email.email' => 'Please enter a valid E-mail address.',
	    	'email.required' => 'E-mail adddress is required.',
	    	'password.required' => 'Password is required.',
	    	'password.min' => 'Your password is too short! Min 5 symbols.',
	    	'email.unique' => 'This E-mail has already been taken.'
	    );

	    // Validate
	    $validator = Validator::make(Input::all(), $validationRules, $message);

	    if ( $validator->passes() ) {            
            $user = new User;

            $user->fullname = Input::get( 'fullname' );
            $user->password = Hash::make( Input::get( 'password' ) );            
            $user->email = Input::get( 'email' );            
            $user->role_id = Input::get('role_id');
            if($user->save()){
                Session::flash( 'success', 'New user successfully created.' );
                return Redirect::to( '/login' );
            }            
        } else {
            // Redirect to UserController@getRegister
	        return Redirect::to( '/register' )->withErrors( $validator )->withInput();         
        }


	}


	/**
	 * Login a user
	 *
	 *
	 */
	public function doLogin()
	{
		$validationRules = array(
	        'email' => 'required|email',
	        'password' => 'required|min:6'
	    );
	    // Set validation rules
	    $message = array(
	    	'email.email' => 'Please enter a valid E-mail address.',
	    	'email.required' => 'E-mail adddress is required.',
	    	'password.required' => 'Password is required.',
	    	'password.min' => 'Your password is too short! Min 5 symbols.',
	    );

	    // Validate
	    $validator = Validator::make(Input::all(), $validationRules, $message);

	    if ( $validator->passes() ) { 

	    	if(Auth::attempt(array(
	    		'email' => Input::get('email'),
	    		'password' => Input::get('password'))
	    		))          
            {
            	// redirect to home page
            	return Redirect::to( '/' );
            }else{
            	// Redirect to login form
            	Session::flash( 'error', 'Your email or password is wrong!' );
	        	return Redirect::to( '/login' )->withErrors( $validator )->withInput(); 
            }
                      
        } else {
            // Redirect to UserController@getRegister
	        return Redirect::to( '/login' )->withErrors( $validator )->withInput();         
        }


	}

}