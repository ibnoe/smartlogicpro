<?php

class PembeliandlmnegerisController extends \BaseController {

	/**
	 * Display a listing of pembelian dalam negeri
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Pembeliandlmnegeri::all();
		
		$totalpenjualannegeri = DB::table('pembeliandlmnegeris')->sum('penjualan');
		$totalppnnegeri = DB::table('pembeliandlmnegeris')->sum('ppn');
		return View::make('pembeliandlmnegeris.index')
		->with('data',$data)
		->with('totalpenjualannegeri', $totalpenjualannegeri)
		->with('totalppnnegeri', $totalppnnegeri);
	}
 
	/**
	 * Show the form for creating a new pembelian dalam negeri
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pembeliandlmnegeris.create');
	}

	/**
	 * Store a newly created pembelian dalam negeri in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pembeliandlmnegeri::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Pembeliandlmnegeri::create($data);

		return Redirect::route('karyawan.pembeliandlmnegeris.index');
	}

	/**
	 * Display the specified pembelian dalam negeri.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pembeliandlmnegeri = Pembeliandlmnegeri::findOrFail($id);

		return View::make('pembeliandlmnegeris.show', compact('pembeliandlmnegeri'));
	}

	/**
	 * Show the form for editing the specified tanpa faktur lengkap.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pembeliandlmnegeri = Pembeliandlmnegeri::find($id);

		return View::make('pembeliandlmnegeris.edit', compact('pembeliandlmnegeri'));
	}

	/**
	 * Update the specified pembelian dalam negeri in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pembeliandlmnegeri = Pembeliandlmnegeri::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pembeliandlmnegeri::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pembeliandlmnegeri->update($data);

		return Redirect::route('karyawan.pembeliandlmnegeris.index');
	}

	/**
	 * Remove the specified pembelian dalam negeri from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Pembeliandlmnegeri::destroy($id);

		return Redirect::route('karyawan.pembeliandlmnegeris.index');
	}

}
