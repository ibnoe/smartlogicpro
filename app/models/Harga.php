<?php

class Harga extends \Eloquent {
	protected $table='hargas';
	// Add your validation rules here
	public static $rules = [
		'kd_harga' => 'required',
		'nama_harga' => 'required',
		'harga' => 'required | integer'
	];

	// Don't forget to fill this array
	protected $fillable = ['kd_harga','nama_harga','harga'];
	public static function data()
	{
		return Harga::orderBy('nama_harga', 'asc')
		->paginate(10);
	}
}