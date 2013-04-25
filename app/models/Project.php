<?php

class Project extends Eloquent {

	protected $fillable = array();

	public function Issues()
	{
		return $this->hasMany('Issue');
	}
}
