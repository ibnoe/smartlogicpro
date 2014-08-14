<?php

class PotongansController extends \BaseController {

	/**
	 * Display a listing of potongans
	 *
	 * @return Response
	 */
	public function index()
	{
		$potongans = Potongan::all();

		return View::make('potongans.index', compact('potongans'));
	}

	/**
	 * Show the form for creating a new potongan
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('potongans.create');
	}

	/**
	 * Store a newly created potongan in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Potongan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Potongan::create($data);

		return Redirect::route('potongans.index');
	}

	/**
	 * Display the specified potongan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$potongan = Potongan::findOrFail($id);

		return View::make('potongans.show', compact('potongan'));
	}

	/**
	 * Show the form for editing the specified potongan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$potongan = Potongan::find($id);

		return View::make('potongans.edit', compact('potongan'));
	}

	/**
	 * Update the specified potongan in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$potongan = Potongan::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Potongan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$potongan->update($data);

		return Redirect::route('potongans.index');
	}

	/**
	 * Remove the specified potongan from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Potongan::destroy($id);

		return Redirect::route('potongans.index');
	}

}
