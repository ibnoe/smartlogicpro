<?php

class Laporan1111abku extends Eloquent {

  /**
   * The database table used by the model penjualan eksports
   *
   * @var string
   */
  protected $table = 'penjualaneksports';

  /**
   * Fillable column
   *
   * @var array
   */
  protected $fillable = array('id', 'nama_pembeli', 'no_ekspor', 'penjualan');

  /**
   * getter semua penjualan eksports
   * 
   * @return collection
   */
  public static function semua()
  {
    return Laporan1111abku::orderBy('id', 'asc')
      ->get();
  }
  
  public static function data()
  {
	return DB::table('users')
	->join('karyawans','users.kd_karyawan', '=', 'karyawans.kd_karyawan' )
	->join('perusahaans', 'users.kd_perusahaan', '=', 'users.kd_perusahaan')
	
	
	->select('karyawans.kd_karyawan', 'perusahaans.kd_perusahaan', 'users.id', 'users.firstname', 'users.lastname')
	
      ->orderBy('users.id', 'asc')
	  
      ->paginate(10);
	
	
  }

  /**
   * getter data penjualan eksports
   * 
   * @return collection
   */
  public static function data()
  {
    return Laporan1111abku::orderBy('id', 'asc')
      ->paginate(10);
  }

	
}