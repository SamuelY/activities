<?php

class Beside extends \Eloquent {
	protected $table = 'besides';
	protected $fillable = [];
	
    public function comments()
    {
        return $this->hasMany('Comment');
    }
}