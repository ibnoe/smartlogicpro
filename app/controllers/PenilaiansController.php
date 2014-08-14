<?php

class PenilaiansController extends \BaseController {

	/**
	 * Display a listing of penilaians
	 *
	 * @return Response
	 */
	public function index()
	{
		$penilaians = Penilaian::all();

		return View::make('penilaians.index', compact('penilaians'));
	}

	/**
	 * Show the form for creating a new penilaian
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('penilaians.create');
	}

	/**
	 * Store a newly created penilaian in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Penilaian::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Penilaian::create($data);

		return Redirect::route('penilaians.index');
	}

	/**
	 * Display the specified penilaian.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$penilaian = Penilaian::findOrFail($id);

		return View::make('penilaians.show', compact('penilaian'));
	}

	/**
	 * Show the form for editing the specified penilaian.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$penilaian = Penilaian::find($id);

		return View::make('penilaians.edit', compact('penilaian'));
	}

	/**
	 * Update the specified penilaian in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$penilaian = Penilaian::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Penilaian::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$penilaian->update($data);

		return Redirect::route('penilaians.index');
	}

	/**
	 * Remove the specified penilaian from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Penilaian::destroy($id);

		return Redirect::route('penilaians.index');
	}

}
