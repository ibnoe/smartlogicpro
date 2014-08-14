<?php

class Laporan1111b1Controller extends \BaseController {

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

  }
  

  /**
   * export ke pdf
   * 
   * @return 
   */
  public function pdf()
  {
    // data

    $faktur = Laporan1111b1ku::all();
	
		$totalpenjualan = DB::table('pembelianimports')->sum('penjualan');
		$totalppn = DB::table('pembelianimports')->sum('ppn');	
	
    return View::make('pdf.laporan1111b1', compact('faktur'))
		->with('faktur',$faktur)
		->with('totalpenjualan', $totalpenjualan)
		->with('totalppn', $totalppn);
  }

}