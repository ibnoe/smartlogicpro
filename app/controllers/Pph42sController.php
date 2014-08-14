<?php

class Pph42sController extends \BaseController {

	/**
	 * Display a listing of pph42s
	 *
	 * @return Response
	 */
	public function index()
	{
		$pph42s = Pph42::all();

		return View::make('pph42s.index', compact('pph42s'));
	}

	/**
	 * Show the form for creating a new pph42
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pph42s.create');
	}

	/**
	 * Store a newly created pph42 in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pph42::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Pph42::create($data);

		return Redirect::route('pph42s.index');
	}

	/**
	 * Display the specified pph42.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pph42 = Pph42::findOrFail($id);

		return View::make('pph42s.show', compact('pph42'));
	}

	/**
	 * Show the form for editing the specified pph42.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pph42 = Pph42::find($id);

		return View::make('pph42s.edit', compact('pph42'));
	}

	/**
	 * Update the specified pph42 in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pph42 = Pph42::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pph42::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pph42->update($data);

		return Redirect::route('pph42s.index');
	}

	/**
	 * Remove the specified pph42 from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Pph42::destroy($id);

		return Redirect::route('pph42s.index');
	}

}
