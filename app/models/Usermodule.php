<?php

class Usermodule extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'user_id' => 'required',
		'module_id' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['user_id', 'module_id'];

	public static function data() {
		return DB::table('users')
		->join('users_groups', 'users.id', '=', 'users_groups.user_id')
		->join('groups', 'users_groups.group_id', '=', 'groups.id')
		->join('perusahaans', 'users.id', '=', 'perusahaans.users_id')
		->where('groups.name', 'administrator-owner')

		->get();
	}

}