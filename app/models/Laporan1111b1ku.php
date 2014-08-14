<?php

class Laporan1111b1ku extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'pembelianimports';

  /**
   * Fillable column
   *
   * @var array
   */
  protected $fillable = array('id', 'nama_pembeli', 'no_ekspor', 'penjualan', 'ppn');

  /**
   * getter semua pembelian imports
   * 
   * @return collection
   */
  public static function semua()
  {
    return Laporan1111b1ku::orderBy('id', 'asc')
      ->get();
  }

  /**
   * getter data pembelian imports 
   * 
   * @return collection
   */
  public static function data()
  {
    return Laporan1111b1ku::orderBy('id', 'asc')
      ->paginate(10);
  }



}