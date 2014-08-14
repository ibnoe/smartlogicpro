<?php

class Laporan1111abController extends \BaseController {

  /**
   * konstruktor
   */
  public function __construct()
  {
    $this->beforeFilter('auth');
  }

  /**
   * data faktur laporan 1111ab
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
	
    $faktur = Laporan1111abku::all();
	
	
		$totalpenjualan = DB::table('penjualanfakturlengkaps')->sum('penjualan');
		$totalppn = DB::table('penjualanfakturlengkaps')->sum('ppn');	
	
    return View::make('pdf.laporan1111ab', compact('faktur'))
		->with('faktur',$faktur)
		->with('totalpenjualan', $totalpenjualan)
		->with('totalppn', $totalppn);
  }

}