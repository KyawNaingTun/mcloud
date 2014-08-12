<?php

class PageController extends BaseController {

	/*
	* Display registration form
	*/
	public function showHome()
	{
		return View::make('home');
	}

	/*
	* Display registration form
	*/
	public function showRegister()
	{
		return View::make('register');
	}

	/*
	* Display login form
	*/
	public function showLogin()
	{
		return View::make('login');
	}

}