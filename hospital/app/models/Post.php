<?php

class Post extends Eloquent{

  	protected $table = 'post';

  	protected $fillable = array( 'title','content', 'user_id');

  // role form rule
	 protected $rules = array(

	 );
	 // many comments have at one post
	public function comments() { 
	 	return $this->hasMany('Comment'); 
	 }
	/* 
	* each role hav
	*/
 //   	public function users() {
 //    	return $this->hasMany( 'User' );
	// }
 }