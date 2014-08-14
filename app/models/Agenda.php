<?php

class Agenda extends Eloquent {

	protected $table = 'agendas';
	// Add your validation rules here
	public static $rules = [
		'kd_marketing' => 'required',
        'kd_agenda' => 'required',
        'nama_agenda' => 'required',
        'keterangan' => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['kd_marketing','kd_agenda','nama_agenda','keterangan'];
	
	public static function data()
		{
			return Agenda::orderBy('kd_agenda', 'asc')
			->paginate(10);
		}

	

}