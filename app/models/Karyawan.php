<?php

class Karyawan extends \Eloquent {

    // Add your validation rules here
    public static $rules = [
                               'id' => 'required',
                               'uid' => 'required',
                               'kd_agama' => 'required',
                               'kd_jab' => 'required',
                               'kd_gol' => 'required',
                               'kd_statuskawin' => 'required',
                               'kd_karyawan' => 'required',
                               'uid_owner' => 'required',
                               'nik' => 'required',
                               'jen_kel' => 'required',
                               'tempat_lahir' => 'required',
                               'tgl_lahir' => 'required',
                               'pendidikan' => 'required',
                               'tgl_masuk' => 'required',
                               'tgl_keluar' => 'required',
                               'alamat' => 'required',
                               'desa' => 'required',
                               'kota' => 'required',
                               'propinsi' => 'required',
                               'kode_pos' => 'required',
                               'no_telephone' => 'required',
                               'no_handphone' => 'required',
                               'npwp' => 'required',
                               'foto' => 'required'
                           ];

    // Don't forget to fill this array
    protected $fillable = ['id' , 'uid' , ' kd_agama' , 'kd_jab' , 'kd_gol' , 'kd_statuskawin' , 'kd_karyawan' , 'uid_owner' , 'nik' , 'jen_kel' , 'tempat_lahir' , 'tgl_lahir' , 'pendidikan' , 'tgl_masuk' , 'tgl_keluar' , 'alamat' , 'desa' , 'kota' , 'propinsi' , 'kode_pos' , 'no_telephone' , 'no_handphone' , 'npwp' , 'foto' , 'created_at' , 'updated_at'];

    public static function data()
    {
        return $data = DB::table('users')
                       ->join('users_groups', 'users.id', '=', 'users_groups.user_id')
                       ->join('groups', 'users_groups.group_id', '=', 'groups.id')
                       ->join('karyawans', 'users.uid', '=', 'karyawans.uid')
                       ->join('jabatans', 'karyawans.kd_jab', '=', 'jabatans.kd_jab')
                       ->get();
    }

}