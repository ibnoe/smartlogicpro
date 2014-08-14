<?php

class TunjangansController extends \BaseController {

	/**
	 * Display a listing of tunjangans
	 *
	 * @return Response
	 */
	public function index()
	{
		$tunjangans = Tunjangan::all();

		return View::make('tunjangans.index', compact('tunjangans'));
	}

	/**
	 * Show the form for creating a new tunjangan
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tunjangans.create');
	}

	/**
	 * Store a newly created tunjangan in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Tunjangan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Tunjangan::create($data);

		return Redirect::route('tunjangans.index');
	}

	/**
	 * Display the specified tunjangan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tunjangan = Tunjangan::findOrFail($id);

		return View::make('tunjangans.show', compact('tunjangan'));
	}

	/**
	 * Show the form for editing the specified tunjangan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tunjangan = Tunjangan::find($id);

		return View::make('tunjangans.edit', compact('tunjangan'));
	}

	/**
	 * Update the specified tunjangan in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tunjangan = Tunjangan::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Tunjangan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$tunjangan->update($data);

		return Redirect::route('tunjangans.index');
	}

	/**
	 * Remove the specified tunjangan from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Tunjangan::destroy($id);

		return Redirect::route('tunjangans.index');
	}

}
