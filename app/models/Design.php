<?php

class Design extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'rating' => 'required'
	);
}