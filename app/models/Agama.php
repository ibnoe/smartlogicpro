<?php

class Agama extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'kd_agama'     	=> 'required|max:10',
    	'nama'      	=> 'required|max:50',
	];

	// Don't forget to fill this array
	protected $fillable = ['kd_agama','nama'];

	public static function data()
		{
			return Agama::orderBy('kd_agama', 'asc')
			->paginate(10);
		}

	public static function set($id)
		{
			return Agama::find($id);
		}

}