<?php

class Comment extends Eloquent {
	protected $table = 'comment';
	
	protected $fillable = array('comment', 'user_id', 'post_id');	

}
