<?php

class TanpafakturlengkapsController extends \BaseController {

	/**
	 * Display a listing of tanpa faktur lengkaps
	 *
	 * @return Response
	 */
	public function index()
	{
		$datatanpafaktur = Tanpafakturlengkap::all();
		$totalpenjualantanpalengkap = DB::table('tanpafakturlengkaps')->sum('penjualan');
		$totalppntanpalengkap = DB::table('tanpafakturlengkaps')->sum('ppn');
		return View::make('tanpafakturlengkaps.index')
		->with('datatanpafaktur',$datatanpafaktur)
		->with('totalpenjualantanpalengkap', $totalpenjualantanpalengkap)
		->with('totalppntanpalengkap', $totalppntanpalengkap);
	

	}
 
	/**
	 * Show the form for creating a new tanpa faktur lengkap
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tanpafakturlengkaps.create');
	}

	/**
	 * Store a newly created tanpafakturlengkaps in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Tanpafakturlengkap::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Tanpafakturlengkap::create($data);

		return Redirect::route('karyawan.tanpafakturlengkaps.index');
	}

	/**
	 * Display the specified tanpafakturlengkaps.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tanpafakturlengkap = Tanpafakturlengkap::findOrFail($id);

		return View::make('tanpafakturlengkaps.show', compact('tanpafakturlengkap'));
	}

	/**
	 * Show the form for editing the specified tanpa faktur lengkap.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tanpafakturlengkap = Tanpafakturlengkap::find($id);

		return View::make('tanpafakturlengkaps.edit', compact('tanpafakturlengkap'));
	}

	/**
	 * Update the specified tanpa faktur lengkap in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tanpafakturlengkap = Tanpafakturlengkap::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Tanpafakturlengkap::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$tanpafakturlengkap->update($data);

		return Redirect::route('karyawan.tanpafakturlengkaps.index');
	}

	/**
	 * Remove the specified tanpa faktur lengkap from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Tanpafakturlengkap::destroy($id);

		return Redirect::route('karyawan.tanpafakturlengkaps.index');
	}

}
