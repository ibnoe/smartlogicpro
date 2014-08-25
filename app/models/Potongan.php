<?php

class Potongan extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'kode_potongan' => 'required',
		'nama_potongan' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['kode_potongan','nama_potongan'];

}