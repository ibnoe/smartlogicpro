<?php

class Jabatan extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'kd_jab' => 'required',
		'nama_jabatan' => 'required',
		'tun_kes' => 'required',
		'tun_mkn' => 'required',
		'tun_transport' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['kd_jab','nama_jabatan','tun_kes','tun_mkn','tun_transport'];
	public static function data()
		{
			return Jabatan::orderBy('kd_agama', 'asc')
			->paginate(10);
		}

	public static function set($id)
		{
			return Jabatan::find($id);
		}

}