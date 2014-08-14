<?php

class Tanpafakturlengkap extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'

    	'nama_pembeli'      => 'required|max:50',
		'no_faktur'      	=> 'required|max:50',
		'penjualan'      	=> 'required|max:50',
		'ppn' 		     	=> 'required|max:50',
	];

	// Don't forget to fill this array
	protected $fillable = ['id','nama_pembeli', 'no_faktur', 'penjualan', 'ppn'];

	public static function datatanpafaktur()
		{
			return Tanpafakturlengkap::orderBy('id', 'asc')
			->paginate(10);
		}

	public static function set($id)
		{
			return Tanpafakturlengkap::find($id);
		}

}