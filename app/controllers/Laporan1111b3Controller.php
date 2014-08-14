<?php

class Laporan1111b3Controller extends \BaseController {

  /**
   * konstruktor
   */
  public function __construct()
  {
    $this->beforeFilter('auth');
  }

  /**
   * data faktur laporan 1111b3
   *
   * @return View
   */
  public function index()
  {
    // data semua laporan 1111b3
    $data = Laporan1111b3ku::data();

    // tipe
    $tipe = 'semua';

    return View::make('data.laporan', compact('data', 'tipe'));
  }
  

  /**
   * export ke pdf
   * 
   * @return 
   */
  public function pdf()
  {
    // data

    return View::make('pdf.laporan1111b3');
  }

}