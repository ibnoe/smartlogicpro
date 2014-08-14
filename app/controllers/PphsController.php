<?php

class PphsController extends \BaseController {

	/**
	 * Display a listing of pphs
	 *
	 * @return Response
	 */
	public function index()
	{
		$pphs = Pph::all();

		return View::make('pphs.index', compact('pphs'));
	}

	/**
	 * Show the form for creating a new pph
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pphs.create');
	}

	/**
	 * Store a newly created pph in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pph::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Pph::create($data);

		return Redirect::route('pphs.index');
	}

	/**
	 * Display the specified pph.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pph = Pph::findOrFail($id);

		return View::make('pphs.show', compact('pph'));
	}

	/**
	 * Show the form for editing the specified pph.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pph = Pph::find($id);

		return View::make('pphs.edit', compact('pph'));
	}

	/**
	 * Update the specified pph in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pph = Pph::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pph::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pph->update($data);

		return Redirect::route('pphs.index');
	}

	/**
	 * Remove the specified pph from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Pph::destroy($id);

		return Redirect::route('pphs.index');
	}

}
