<?php

class UsermodulesController extends \BaseController {

	/**
	 * Display a listing of usermodules
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Usermodule::data();

		return View::make('usermodules.index', compact('data'));
	}

	/**
	 * Show the form for creating a new usermodule
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usermodules.create');
	}

	/**
	 * Store a newly created usermodule in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usermodule::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Usermodule::create($data);

		return Redirect::route('usermodules.index');
	}

	/**
	 * Display the specified usermodule.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usermodule = Usermodule::findOrFail($id);

		return View::make('usermodules.show', compact('usermodule'));
	}

	/**
	 * Show the form for editing the specified usermodule.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usermodule = Usermodule::find($id);

		return View::make('usermodules.edit', compact('usermodule'));
	}

	/**
	 * Update the specified usermodule in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usermodule = Usermodule::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usermodule::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usermodule->update($data);

		return Redirect::route('usermodules.index');
	}

	/**
	 * Remove the specified usermodule from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usermodule::destroy($id);

		return Redirect::route('usermodules.index');
	}


	/**
	 * Remove the specified usermodule from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function addownermodules($id)
	{
		$usermodule = Usermodule::find($id);

		return View::make('usermodules.addownermodules', compact('usermodule'));
	}
}
