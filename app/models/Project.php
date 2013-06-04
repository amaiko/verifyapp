<?php

class Project extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'logo' => 'required'
	);
	   public function designs()
    {
        return $this->hasMany('Design');
    }
}