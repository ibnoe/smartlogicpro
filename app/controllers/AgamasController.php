<?php

class AgamasController extends \BaseController {

	/**
	 * Display a listing of agamas
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Agama::all();
        return View::make('agamas.index')->with('data', $data);
	}
 
	/**
	 * Show the form for creating a new agama
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('agamas.create');
	}

	/**
	 * Store a newly created agama in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Agama::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Agama::create($data);

		return Redirect::route('administrator.agamas.index');
	}

	/**
	 * Display the specified agama.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$agama = Agama::findOrFail($id);

		return View::make('agamas.show', compact('agama'));
	}

	/**
	 * Show the form for editing the specified agama.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$agama = Agama::find($id);

		return View::make('agamas.edit', compact('agama'));
	}

	/**
	 * Update the specified agama in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$agama = Agama::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Agama::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$agama->update($data);

		return Redirect::route('administrator.agamas.index');
	}

	/**
	 * Remove the specified agama from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Agama::destroy($id);

		return Redirect::route('administrator.agamas.index');
	}

}
