<?php

class DepartementsController extends \BaseController {

	/**
	 * Display a listing of departements
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Departement::all();
		return View::make('departements.index')->with('data', $data);
	}

	/**
	 * Show the form for creating a new departement
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('departements.create');
	}

	/**
	 * Store a newly created departement in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Departement::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Departement::create($data);

		return Redirect::route('administrator.departements.index');
	}

	/**
	 * Display the specified departement.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$departement = Departement::findOrFail($id);

		return View::make('departements.show', compact('departement'));
	}

	/**
	 * Show the form for editing the specified departement.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$departement = Departement::find($id);

		return View::make('departements.edit', compact('departement'));
	}

	/**
	 * Update the specified departement in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$departement = Departement::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Departement::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$departement->update($data);

		return Redirect::route('administrator.departements.index');
	}

	/**
	 * Remove the specified departement from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Departement::destroy($id);

		return Redirect::route('administrator.departements.index');
	}

}
