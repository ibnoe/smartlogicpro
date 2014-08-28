<?php

class Absensi extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'uid_karyawan' => 'required',
		'kd_absensi' => 'required',
		'tanggal' => 'required',
		'cuti' => 'required',
		'ijin' => 'required',
		'sakit' => 'required',
		'alpha' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['uid_karyawan' , 'kd_absensi' , 'tanggal' , 'cuti' , 'ijin' , 'sakit' , 'alpha' ];
	
	public static function dataindex() {
		return DB::table('absensis')
			->join('users', 'absensis.uid_karyawan', '=', 'users.uid')
			->get();
	}


}