<?php

class Owner extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'owners';

	
  /**
	 * Fillable column
	 *
	 * @var array
	 */
  protected $fillable = array('uid', 'kd_perusahaan', 'kd_marketing', 'kd_owner', 'handphone', 'npwp', 'alamat', 'kota', 'propinsi', 'kode_pos', 'tanggal_daftar', 'tanggal_aktifasi', 'status');

	
  /**
   * getter semua harga
   * 
   * @return collection
   */
  public static function semua()
  {
    return Owner::orderBy('kd_karyawan', 'asc')
      ->get();
  }

  /**
   * getter data harga
   * 
   * @return collection
   */
  public static function data()
  {
    return $data = DB::table('users')
		->join('users_groups', 'users.id', '=', 'users_groups.user_id')
		->join('groups', 'users_groups.group_id', '=', 'groups.id')
		->join('perusahaans', 'users.id', '=', 'perusahaans.users_id')
		->get();
  }

  /**
   * urut user
   * 
   * @param  string $kolom nama kolom pengurutan
   * @param  string $tipe  tipe pengurutan
   * @return collection
   */
  public static function urut($kolom, $tipe)
  {
    return Owner::orderBy($kolom, $tipe)
		->paginate(10);
  }

  /**
   * cari harga
   * 
   * @param  string $kolom nama kolom pengurutan
   * @param  string $tipe  tipe pengurutan
   * @param  string $cari  kode harga
   * @return collection
   */
  public static function cari($kolom, $tipe, $cari)
  {
    return Hargaku::orderBy($kolom, $tipe)
      ->where('kd_karyawan', 'like', '%'.$cari.'%')
      ->get();
  }

  /**
   * tambah data harga
   * 
   * @param  array $data data harga
   * @return bool
   */
   
  public static function tambah($data)
  {
    // data
    $owner           = new Owner;

    $owner->kd_karyawan 		  = $data['kd_karyawan'];	
    $owner->kd_perusahaan 		= $data['kd_perusahaan'];
    $owner->kd_marketing			    = $data['kd_marketing'];
    $owner->kd_owner      = $data['kd_owner'];  
    $owner->username    = $data['username'];
    $owner->password         = $data['password'];
    $owner->nama_depan      = $data['nama_depan'];  
    $owner->nama_belakang    = $data['nama_belakang'];
    $owner->handphone         = $data['handphone'];
    $owner->npwp      = $data['npwp'];  
    $owner->alamat    = $data['alamat'];
    $owner->kota         = $data['kota'];
    $owner->propinsi      = $data['propinsi'];  
    $owner->kode_pos    = $data['kode_pos'];
    $owner->email         = $data['email'];

    // simpan
    return ($owner->save()) ? true : false;
  }

  /**
   * set harga
   * 
   * @param int $id 
   */
  public static function set($id)
  {
    return Owner::find($id);
  }

  /**
   * rubah harga
   * 
   * @param  int   $id   id harga
   * @param  array $data data harga
   * @return bool
   */
   
  public static function rubah($id, $data)
  {
    // data
    $harga           		= Owner::find($id);
	
    $owner->kd_karyawan       = $data['kd_karyawan']; 
    $owner->kd_perusahaan     = $data['kd_perusahaan'];
    $owner->kd_marketing          = $data['kd_marketing'];
    $owner->kd_owner          = $data['kd_owner'];  
    $owner->username    = $data['username'];
    $owner->password         = $data['password'];
    $owner->nama_depan      = $data['nama_depan'];  
    $owner->nama_belakang    = $data['nama_belakang'];
    $owner->handphone         = $data['handphone'];
    $owner->npwp      = $data['npwp'];  
    $owner->alamat    = $data['alamat'];
    $owner->kota         = $data['kota'];
    $owner->propinsi      = $data['propinsi'];  
    $owner->kode_pos    = $data['kode_pos'];
    $owner->email         = $data['email'];
	
    // simpan
    return ($owner->save()) ? true : false;
  }

  /**
   * hapus harga
   * 
   * @param  int $id id harga
   * @return void
   */
   
  public static function hapus($id)
  {
  	$harga = static::set($id);

	Owner::destroy($id);
  }


}