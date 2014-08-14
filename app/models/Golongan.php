<?php

class Golongan extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		'kd_gol'  => 'required',
		'gol_pok' => 'required',
		'tun_jab' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['kd_gol','gol_pok','tun_jab'];
	public static function data()
		{
			return Golongan::orderBy('kd_gol', 'asc')
			->paginate(10);
		}

	public static function set($id)
		{
			return Golongan::find($id);
		}

}