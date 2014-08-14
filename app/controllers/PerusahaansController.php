<?php

class PerusahaansController extends \BaseController {

	/**
	 * Display a listing of perusahaans
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Perusahaan::all();
		return View::make('perusahaans.index')->with('data', $data);
	}

	/**
	 * Show the form for creating a new perusahaan
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('perusahaans.create');
	}

	/**
	 * Store a newly created perusahaan in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Perusahaan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Perusahaan::create($data);

		return Redirect::route('perusahaans.index');
	}

	/**
	 * Display the specified perusahaan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$perusahaan = Perusahaan::findOrFail($id);

		return View::make('perusahaans.show', compact('perusahaan'));
	}

	/**
	 * Show the form for editing the specified perusahaan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$perusahaan = Perusahaan::find($id);

		return View::make('perusahaans.edit', compact('perusahaan'));
	}

	/**
	 * Update the specified perusahaan in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$perusahaan = Perusahaan::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Perusahaan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$perusahaan->update($data);

		return Redirect::route('perusahaans.index');
	}

	/**
	 * Remove the specified perusahaan from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Perusahaan::destroy($id);

		return Redirect::route('perusahaans.index');
	}

}
