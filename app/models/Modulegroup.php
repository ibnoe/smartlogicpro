<?php

class Modulegroup extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'nama_grup_module' => 'required',
		'kd_grup' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['nama_grup_module','kd_grup'];

}