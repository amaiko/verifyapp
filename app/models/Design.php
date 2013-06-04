<?php

class Design extends Eloquent {
	           
    protected $guarded = array();

    public static $rules = array(
		'rating' => 'required'
	);
     public function functionName($id, $newrating)
    {
        $design = Design::find($id);

		$design->rating = $newrating;

		$design->save();
    }
}