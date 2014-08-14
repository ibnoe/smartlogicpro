<?php

class GolongansController extends \BaseController {

	/**
	 * Display a listing of golongans
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Golongan::all();
        return View::make('golongans.index')->with('data', $data);
	}

	/**
	 * Show the form for creating a new golongan
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('golongans.create');
	}

	/**
	 * Store a newly created golongan in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Golongan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Golongan::create($data);

		return Redirect::route('administrator.golongans.index');
	}

	/**
	 * Display the specified golongan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$golongan = Golongan::findOrFail($id);

		return View::make('golongans.show', compact('golongan'));
	}

	/**
	 * Show the form for editing the specified golongan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$golongan = Golongan::find($id);

		return View::make('golongans.edit', compact('golongan'));
	}

	/**
	 * Update the specified golongan in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$golongan = Golongan::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Golongan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$golongan->update($data);

		return Redirect::route('administrator.golongans.index');
	}

	/**
	 * Remove the specified golongan from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Golongan::destroy($id);

		return Redirect::route('administrator.golongans.index');
	}

}
