<?php

class Laporan1111b3ku extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'karyawans';

  /**
   * Fillable column
   *
   * @var array
   */
  protected $fillable = array('kd_agama', 'kd_dep', 'kd_jab', 'kd_gol', 'kd_statuskawin', 'kd_perusahaan', 'kd_karyawan', 'nik', 'nama_depan', 'nama_belakang', 'jen_kel', 'tempat_lahir', 'tgl_lahir', 'pendidikan', 'tgl_masuk', 'tgl_keluar', 'alamat', 'desa', 'kota', 'propinsi', 'kode_pos', 'no_telephone', 'no_handphone', 'email', 'npwp', 'foto');

  /**
   * getter semua faktur pembelian
   * 
   * @return collection
   */
  public static function semua()
  {
    return DB::table('karyawans')
      ->join('agamas', 'karyawans.kd_agama', '=', 'agamas.kd_agama')
      ->join('departemens', 'karyawans.kd_dep', '=', 'departemens.kd_dep')
      ->join('jabatans', 'karyawans.kd_jab', '=', 'jabatans.kd_jab')
      ->join('golongans', 'karyawans.kd_gol', '=', 'golongans.kd_gol')
      ->join('ptkps', 'karyawans.kd_statuskawin', '=', 'ptkps.kd_statuskawin')
      ->join('perusahaans', 'karyawans.kd_karyawan', '=', 'perusahaans.kd_perusahaan')

      ->select('agamas.kd_agama', 'departemens.kd_dep', 'jabatans.kd_jab', 'golongans.kd_gol', 'ptkps.kd_statuskawin', 'karyawans.kd_karyawan', 'karyawans.id', 'karyawans.nik', 'karyawans.nama_depan', 'karyawans.nama_belakang', 'karyawans.foto', 'perusahaans.kd_perusahaan', 'perusahaans.nama_perusahaan')
	  
	  ->orderBy('karyawans.kd_karyawan', 'asc')
	  
      ->get();
  }
  
  
  
	


  /**
   * getter data laporan
   * 
   * @return collection
   */
  public static function data()
  {
    return DB::table('karyawans')
      ->join('agamas', 'karyawans.kd_agama', '=', 'agamas.kd_agama')
      ->join('departemens', 'karyawans.kd_dep', '=', 'departemens.kd_dep')
      ->join('jabatans', 'karyawans.kd_jab', '=', 'jabatans.kd_jab')
      ->join('golongans', 'karyawans.kd_gol', '=', 'golongans.kd_gol')
      ->join('ptkps', 'karyawans.kd_statuskawin', '=', 'ptkps.kd_statuskawin')
      ->join('perusahaans', 'karyawans.kd_karyawan', '=', 'perusahaans.kd_perusahaan')

      ->select('agamas.kd_agama', 'departemens.kd_dep', 'jabatans.kd_jab', 'golongans.kd_gol', 'ptkps.kd_statuskawin', 'karyawans.kd_karyawan', 'karyawans.id', 'karyawans.nik', 'karyawans.nama_depan', 'karyawans.nama_belakang', 'karyawans.foto', 'perusahaans.kd_perusahaan', 'perusahaans.nama_perusahaan')

      ->orderBy('karyawans.kd_karyawan', 'asc')

      ->paginate(10);
  }



}