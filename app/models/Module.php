<?php

class Module extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'nama_modul' => 'required',
		'id_kelompokmodule' => 'required',
		'url_module' => 'required',
		'status_module' => 'required',
		'icon_module'      	=> 'mimes:jpg,jpeg,png|max:5000'
	];

	// Don't forget to fill this array
	protected $fillable = ['nama_modul', 'id_kelompokmodule', 'url_module', 'status_module', 'icon_module'];

	public static function data() {
		return DB::table('modules')
			->join('modulegroups', 'modules.id_kelompokmodule', '=', 'modulegroups.id')
			->select('modulegroups.nama_grup_module', 'modulegroups.kd_grup', 'modules.id','modules.nama_modul', 'modules.url_module', 'modules.status_module', 'modules.icon_module')
			->orderBy('modules.id_kelompokmodule', 'asc')
			->get();
	}

	public static function set($id) {
		return Module::find($id);
	}
}