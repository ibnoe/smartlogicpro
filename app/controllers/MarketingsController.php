<?php

class MarketingsController extends \BaseController {

	/**
	 * Display a listing of marketings
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Marketing::data();

		return View::make('marketings.index', compact('data'));
	}

	/**
	 * Show the form for creating a new marketing
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('marketings.create');
	}

	/**
	 * Store a newly created marketing in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Marketing::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Marketing::create($data);

		return Redirect::route('administrator.marketings.index');
	}

	/**
	 * Display the specified marketing.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$marketing = Marketing::findOrFail($id);

		return View::make('marketings.show', compact('marketing'));
	}

	/**
	 * Show the form for editing the specified marketing.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$marketing = Marketing::find($id);

		return View::make('marketings.edit', compact('marketing'));
	}

	/**
	 * Update the specified marketing in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$marketing = Marketing::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Marketing::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$marketing->update($data);

		return Redirect::route('administrator.marketings.index');
	}

	/**
	 * Remove the specified marketing from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Marketing::destroy($id);

		return Redirect::route('administrator.marketings.index');
	}

}
