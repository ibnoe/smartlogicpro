<?php

class Marketing extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'uid' => 'required',
		'no_hp' => 'required',
		'alamat' => 'required',
		'kota' => 'required',
		'propinsi' => 'required',
		'kode_pos' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['uid', 'no_hp', 'alamat', 'kota', 'propinsi', 'kode_pos'];
	
	public static function data()
	{
		return $data = DB::table('users')
		->join('users_groups', 'users.id', '=', 'users_groups.user_id')
		->join('groups', 'users_groups.group_id', '=', 'groups.id')
		->join('marketings', 'users.uid', '=', 'marketings.uid')
		->where('groups.name', '=', 'marketing')
		->get();
	}
	
}