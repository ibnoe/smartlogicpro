<?php

class Laporan1111b2ku extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'pembeliandlmnegeris';

  /**
   * Fillable column
   *
   * @var array
   */
  protected $fillable = array('id', 'nama_pembeli', 'npwp', 'no_faktur', 'penjualan', 'ppn');

  /**
   * getter semua barang
   * 
   * @return collection
   */
  public static function semua()
  {
    return Laporan1111b2ku::orderBy('id', 'asc')
      ->get();
  }

  /**
   * getter data barang
   * 
   * @return collection
   */
  public static function data()
  {
    return Laporan1111b2ku::orderBy('id', 'asc')
      ->paginate(10);
  }



}