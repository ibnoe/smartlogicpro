<?php

class AbsensisController extends \BaseController {

	/**
	 * Display a listing of absensis
	 *
	 * @return Response
	 */
	public function index()
	{
		$absensis = Absensi::all();

		return View::make('absensis.index', compact('absensis'));
	}

	/**
	 * Show the form for creating a new absensi
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('absensis.create');
	}

	/**
	 * Store a newly created absensi in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Absensi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Absensi::create($data);

		return Redirect::route('absensis.index');
	}

	/**
	 * Display the specified absensi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$absensi = Absensi::findOrFail($id);

		return View::make('absensis.show', compact('absensi'));
	}

	/**
	 * Show the form for editing the specified absensi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$absensi = Absensi::find($id);

		return View::make('absensis.edit', compact('absensi'));
	}

	/**
	 * Update the specified absensi in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$absensi = Absensi::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Absensi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$absensi->update($data);

		return Redirect::route('absensis.index');
	}

	/**
	 * Remove the specified absensi from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Absensi::destroy($id);

		return Redirect::route('absensis.index');
	}

}
