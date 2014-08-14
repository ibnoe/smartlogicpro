<?php

class PpnsController extends \BaseController {

	/**
	 * Display a listing of ppns
	 *
	 * @return Response
	 */
	public function index()
	{
		$ppns = Ppn::all();

		return View::make('ppns.index', compact('ppns'));
	}

	/**
	 * Show the form for creating a new ppn
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ppns.create');
	}

	/**
	 * Store a newly created ppn in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Ppn::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Ppn::create($data);

		return Redirect::route('ppns.index');
	}

	/**
	 * Display the specified ppn.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ppn = Ppn::findOrFail($id);

		return View::make('ppns.show', compact('ppn'));
	}

	/**
	 * Show the form for editing the specified ppn.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ppn = Ppn::find($id);

		return View::make('ppns.edit', compact('ppn'));
	}

	/**
	 * Update the specified ppn in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$ppn = Ppn::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Ppn::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$ppn->update($data);

		return Redirect::route('ppns.index');
	}

	/**
	 * Remove the specified ppn from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Ppn::destroy($id);

		return Redirect::route('ppns.index');
	}

}
