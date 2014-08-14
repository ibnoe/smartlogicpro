<?php

class HargasController extends \BaseController {

	/**
	 * Display a listing of hargas
	 *
	 * @return Response
	 */
	public function index()
	{
		$hargas = Harga::all();

		return View::make('hargas.index', compact('hargas'));
	}

	/**
	 * Show the form for creating a new harga
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('hargas.create');
	}

	/**
	 * Store a newly created harga in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Harga::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Harga::create($data);

		return Redirect::route('hargas.index');
	}

	/**
	 * Display the specified harga.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$harga = Harga::findOrFail($id);

		return View::make('hargas.show', compact('harga'));
	}

	/**
	 * Show the form for editing the specified harga.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$harga = Harga::find($id);

		return View::make('hargas.edit', compact('harga'));
	}

	/**
	 * Update the specified harga in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$harga = Harga::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Harga::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$harga->update($data);

		return Redirect::route('hargas.index');
	}

	/**
	 * Remove the specified harga from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Harga::destroy($id);

		return Redirect::route('hargas.index');
	}

}
