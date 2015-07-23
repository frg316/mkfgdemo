<?php

class Comment extends Eloquent {
	protected $fillable = array('author', 'text', 'image', 'location');	
}
