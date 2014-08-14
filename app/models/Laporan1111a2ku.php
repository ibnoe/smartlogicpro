<?php

class Laporan1111a2ku extends Eloquent {

  /**
   * The database table used by the model penjualan faktur lengkaps
   *
   * @var string
   */
  protected $table = 'penjualanfakturlengkaps';

  /**
   * Fillable column
   *
   * @var array
   */
  protected $fillable = array('id', 'nama_pembeli', 'npwp', 'no_faktur', 'penjualan', 'ppn');

  /**
   * getter semua penjualan faktur lengkaps
   * 
   * @return collection
   */
  public static function semua()
  {
    return Laporan1111a2ku::orderBy('id', 'asc')
      ->get();
  }

  /**
   * getter data penjualan faktur lengkaps
   * 
   * @return collection
   */
  public static function data()
  {
    return Laporan1111a2ku::orderBy('id', 'asc')
      ->paginate(10);
  }



}