<?php

class Status extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'nama_status' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['nama_status'];

}