<?php

class Laporan1111a1Controller extends \BaseController {

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
	
    $faktur 			= Laporan1111a1ku::all();
	
		$totalpenjualan = DB::table('penjualanfakturlengkaps')->sum('penjualan');
		$totalppn = DB::table('penjualanfakturlengkaps')->sum('ppn');	
	
    return View::make('pdf.laporan1111a1', compact('faktur'))
		->with('faktur',$faktur)
		->with('totalpenjualan', $totalpenjualan)
		->with('totalppn', $totalppn);
  }

}