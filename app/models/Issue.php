<?php

class Issue extends Eloquent {

	protected $fillable = array();

	public function comments()
	{
		return $this->hasMany('Comment');
	}

}
