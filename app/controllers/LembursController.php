<?php

class LembursController extends \BaseController {

	/**
	 * Display a listing of lemburs
	 *
	 * @return Response
	 */
	public function index()
	{
		$lemburs = Lembur::all();

		return View::make('lemburs.index', compact('lemburs'));
	}

	/**
	 * Show the form for creating a new lembur
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('lemburs.create');
	}

	/**
	 * Store a newly created lembur in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Lembur::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Lembur::create($data);

		return Redirect::route('lemburs.index');
	}

	/**
	 * Display the specified lembur.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$lembur = Lembur::findOrFail($id);

		return View::make('lemburs.show', compact('lembur'));
	}

	/**
	 * Show the form for editing the specified lembur.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$lembur = Lembur::find($id);

		return View::make('lemburs.edit', compact('lembur'));
	}

	/**
	 * Update the specified lembur in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$lembur = Lembur::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Lembur::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$lembur->update($data);

		return Redirect::route('lemburs.index');
	}

	/**
	 * Remove the specified lembur from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Lembur::destroy($id);

		return Redirect::route('lemburs.index');
	}

}
