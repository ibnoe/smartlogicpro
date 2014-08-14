<?php

class PenjualansController extends \BaseController {

	/**
	 * Display a listing of inteface penjualan
	 *
	 * @return Response
	 */
	public function index()
	{
		

		$datalengkapfaktur = Penjualanfakturlengkap::all();
		$datatanpafaktur = Tanpafakturlengkap::all();

		$totalpenjualanlengkap = DB::table('penjualanfakturlengkaps')->sum('penjualan');
		$totalppnlengkap = DB::table('penjualanfakturlengkaps')->sum('ppn');

		$totalpenjualantanpalengkap = DB::table('tanpafakturlengkaps')->sum('penjualan');
		$totalppntanpalengkap = DB::table('tanpafakturlengkaps')->sum('ppn');		
		$omset= $totalpenjualanlengkap + $totalpenjualantanpalengkap;
		
        return View::make('interface.index')
		->with('datalengkapfaktur',$datalengkapfaktur)
		->with('datatanpafaktur',$datatanpafaktur)
		->with('totalpenjualanlengkap', $totalpenjualanlengkap)
		->with('totalppnlengkap', $totalppnlengkap)
		->with('totalpenjulantanpalengkap', $totalpenjualantanpalengkap)
		->with('totalppntanpalengkap', $totalppntanpalengkap)
		->with('omset', $omset);	

	}
 


}
