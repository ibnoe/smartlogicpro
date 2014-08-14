<?php

class Laporan1111a1ku extends Eloquent {

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
    return Laporan1111a1ku::orderBy('id', 'asc')
      ->get();
  }
  


  /**
   * getter data penjualan eksports
   * 
   * @return collection
   */
  public static function data()
  {
    return Laporan1111a1ku::orderBy('id', 'asc')
      ->paginate(10);
  }

	
}