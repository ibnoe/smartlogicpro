<?php

class PtkpsController extends \BaseController {

	/**
	 * Display a listing of ptkps
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Ptkp::all();
		return View::make('ptkps.index')->with('data', $data);
	}

	/**
	 * Show the form for creating a new ptkp
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ptkps.create');
	}

	/**
	 * Store a newly created ptkp in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Ptkp::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Ptkp::create($data);

		return Redirect::route('administrator.ptkps.index');
	}

	/**
	 * Display the specified ptkp.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ptkp = Ptkp::findOrFail($id);

		return View::make('ptkps.show', compact('ptkp'));
	}

	/**
	 * Show the form for editing the specified ptkp.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ptkp = Ptkp::find($id);

		return View::make('ptkps.edit', compact('ptkp'));
	}

	/**
	 * Update the specified ptkp in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$ptkp = Ptkp::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Ptkp::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$ptkp->update($data);

		return Redirect::route('administrator.ptkps.index');
	}

	/**
	 * Remove the specified ptkp from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Ptkp::destroy($id);

		return Redirect::route('administrator.ptkps.index');
	}

}
