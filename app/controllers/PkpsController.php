<?php

class PkpsController extends \BaseController {

	/**
	 * Display a listing of pkps
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Pkp::all();

		return View::make('pkps.index', compact('data'));
	}

	/**
	 * Show the form for creating a new pkp
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pkps.create');
	}

	/**
	 * Store a newly created pkp in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pkp::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Pkp::create($data);

		return Redirect::route('administrator.pkps.index');
	}

	/**
	 * Display the specified pkp.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pkp = Pkp::findOrFail($id);

		return View::make('pkps.show', compact('pkp'));
	}

	/**
	 * Show the form for editing the specified pkp.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pkp = Pkp::find($id);

		return View::make('pkps.edit', compact('pkp'));
	}

	/**
	 * Update the specified pkp in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pkp = Pkp::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pkp::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pkp->update($data);

		return Redirect::route('administrator.pkps.index');
	}

	/**
	 * Remove the specified pkp from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Pkp::destroy($id);

		return Redirect::route('administrator.pkps.index');
	}

}
