<?php

class DetailgajisController extends \BaseController {

	/**
	 * Display a listing of detailgajis
	 *
	 * @return Response
	 */
	public function index()
	{
		$detailgajis = Detailgaji::all();

		return View::make('detailgajis.index', compact('detailgajis'));
	}

	/**
	 * Show the form for creating a new detailgaji
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('detailgajis.create');
	}

	/**
	 * Store a newly created detailgaji in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Detailgaji::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Detailgaji::create($data);

		return Redirect::route('detailgajis.index');
	}

	/**
	 * Display the specified detailgaji.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$detailgaji = Detailgaji::findOrFail($id);

		return View::make('detailgajis.show', compact('detailgaji'));
	}

	/**
	 * Show the form for editing the specified detailgaji.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$detailgaji = Detailgaji::find($id);

		return View::make('detailgajis.edit', compact('detailgaji'));
	}

	/**
	 * Update the specified detailgaji in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$detailgaji = Detailgaji::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Detailgaji::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$detailgaji->update($data);

		return Redirect::route('detailgajis.index');
	}

	/**
	 * Remove the specified detailgaji from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Detailgaji::destroy($id);

		return Redirect::route('detailgajis.index');
	}

}
