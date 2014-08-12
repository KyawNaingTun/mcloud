<?php

class Role extends Eloquent{

  	protected $table = 'role';

  	protected $fillable = array( 'name');

  // role form rule
	 protected $rules = array(

	 );

	/* 
	* each role hav
	*/
 //   	public function users() {
 //    	return $this->hasMany( 'User' );
	// }
 }