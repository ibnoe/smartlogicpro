<?php

class Departement extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'kd_dep' => 'required',
		 'nama_dep' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['kd_dep','nama_dep'];

	public static function data()
		{
			return Departement::orderBy('kd_dep', 'asc')
			->paginate(10);
		}

	public static function set($id)
		{
			return Departement::find($id);
		}

}