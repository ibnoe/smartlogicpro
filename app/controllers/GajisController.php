<?php

class GajisController extends \BaseController {

	/**
	 * Display a listing of gajis
	 *
	 * @return Response
	 */
	public function index()
	{
		$gajis = Gaji::all();

		return View::make('gajis.index', compact('gajis'));
	}

	/**
	 * Show the form for creating a new gaji
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('gajis.create');
	}

	/**
	 * Store a newly created gaji in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Gaji::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Gaji::create($data);

		return Redirect::route('gajis.index');
	}

	/**
	 * Display the specified gaji.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$gaji = Gaji::findOrFail($id);

		return View::make('gajis.show', compact('gaji'));
	}

	/**
	 * Show the form for editing the specified gaji.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$gaji = Gaji::find($id);

		return View::make('gajis.edit', compact('gaji'));
	}

	/**
	 * Update the specified gaji in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$gaji = Gaji::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Gaji::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$gaji->update($data);

		return Redirect::route('gajis.index');
	}

	/**
	 * Remove the specified gaji from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Gaji::destroy($id);

		return Redirect::route('gajis.index');
	}

}
