<?php

class PenjualanfakturlengkapsController extends \BaseController {



	/**
	 * Display a listing of agamas
	 *
	 * @return Response
	 */
	public function index()
	{
		$datalengkapfaktur = Penjualanfakturlengkap::all();
		
		$totalpenjualanlengkap = DB::table('penjualanfakturlengkaps')->sum('penjualan');
		$totalppnlengkap = DB::table('penjualanfakturlengkaps')->sum('ppn');
		return View::make('penjualanfakturlengkaps.index')
		->with('datalengkapfaktur',$datalengkapfaktur)
		->with('totalpenjualanlengkap', $totalpenjualanlengkap)
		->with('totalppnlengkap', $totalppnlengkap);

	}
 
	/**
	 * Show the form for creating a new agama
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('penjualanfakturlengkaps.create');
	}

	/**
	 * Store a newly created penjualanfakturlengkaps in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Penjualanfakturlengkap::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Penjualanfakturlengkap::create($data);

		return Redirect::route('karyawan.penjualanfakturlengkaps.index');
	}

	/**
	 * Display the specified penjualanfakturlengkaps.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$agama = Penjualanfakturlengkap::findOrFail($id);

		return View::make('penjualanfakturlengkaps.show', compact('penjualanfakturlengkap'));
		

	}

	/**
	 * Show the form for editing the specified agama.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$penjualanfakturlengkap = Penjualanfakturlengkap::find($id);

		return View::make('penjualanfakturlengkaps.edit', compact('penjualanfakturlengkap'));
	}

	/**
	 * Update the specified agama in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$penjualanfakturlengkap = Penjualanfakturlengkap::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Penjualanfakturlengkap::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$penjualanfakturlengkap->update($data);

		return Redirect::route('karyawan.penjualanfakturlengkaps.index');
	}

	/**
	 * Remove the specified agama from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Penjualanfakturlengkap::destroy($id);

		return Redirect::route('karyawan.penjualanfakturlengkaps.index');
	}

}
