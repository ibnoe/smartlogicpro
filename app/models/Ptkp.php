<?php

class Ptkp extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		'kd_statuskawin' => 'required',
		'jumlah_pktp' => 'required',
		'status_kawin' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['kd_statuskawin','jumlah_pktp','status_kawin'];
	public static function data()
		{
			return Ptkp::orderBy('kd_statuskawin', 'asc')
			->paginate(10);
		}

	public static function set($id)
		{
			return Ptkp::find($id);
		}


}