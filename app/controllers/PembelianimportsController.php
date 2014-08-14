<?php

class PembelianimportsController extends \BaseController {

	/**
	 * Display a listing of pembelian imports
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Pembelianimport::all();

		$totalpenjualanimport = DB::table('pembelianimports')->sum('penjualan');
		$totalppnimport = DB::table('pembelianimports')->sum('ppn');
		return View::make('pembelianimports.index')
		->with('data',$data)
		->with('totalpenjualanimport', $totalpenjualanimport)
		->with('totalppnimport', $totalppnimport);

	}
 
	/**
	 * Show the form for creating a new pembelian imports
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pembelianimports.create');
	}

	/**
	 * Store a newly created pembelianimports in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pembelianimport::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Pembelianimport::create($data);

		return Redirect::route('karyawan.pembelianimports.index');
	}

	/**
	 * Display the specified pembelianimports.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pembelianimport = Pembelianimport::findOrFail($id);

		return View::make('pembelianimports.show', compact('pembelianimport'));
	}

	/**
	 * Show the form for editing the specified tanpa faktur lengkap.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pembelianimport = Pembelianimport::find($id);

		return View::make('pembelianimports.edit', compact('pembelianimport'));
	}

	/**
	 * Update the specified pembelian imports in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pembelianimport = Pembelianimport::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pembelianimport::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pembelianimport->update($data);

		return Redirect::route('karyawan.pembelianimports.index');
	}

	/**
	 * Remove the specified pembelianimports from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Pembelianimport::destroy($id);

		return Redirect::route('karyawan.pembelianimports.index');
	}

}
