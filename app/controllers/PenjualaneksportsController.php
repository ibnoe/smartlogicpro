<?php

class PenjualaneksportsController extends \BaseController {

	/**
	 * Display a listing of penjualan eksports
	 *
	 * @return Response
	 */
	public function index()
	{
		$dataeksport = Penjualaneksport::all();
		$totalpenjualaneksport = DB::table('penjualaneksports')->sum('penjualan');

		return View::make('penjualaneksports.index')
		->with('dataeksport',$dataeksport)
		->with('totalpenjualaneksport', $totalpenjualaneksport);
	}
 
	/**
	 * Show the form for creating a new penjualan eksports 
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('penjualaneksports.create');
	}

	/**
	 * Store a newly created penjualan eksports in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Penjualaneksport::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Penjualaneksport::create($data);

		return Redirect::route('karyawan.penjualaneksports.index');
	}

	/**
	 * Display the specified penjualan eksports.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$penjualaneksport = Penjualaneksport::findOrFail($id);

		return View::make('penjualaneksports.show', compact('penjualaneksport'));
	}

	/**
	 * Show the form for editing the specified penjualan eksport
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$penjualaneksport = Penjualaneksport::find($id);

		return View::make('penjualaneksports.edit', compact('penjualaneksport'));
	}

	/**
	 * Update the specified penjualan eksport in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$penjualaneksport = Penjualaneksport::findOrFail($id);
		$validator = Validator::make($data = Input::all(), Penjualaneksport::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		
		$penjualaneksport->update($data);

		return Redirect::route('karyawan.penjualaneksports.index');
	}

	/**
	 * Remove the specified penjualaneksports from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Penjualaneksport::destroy($id);

		return Redirect::route('karyawan.penjualaneksports.index');
	}

}
