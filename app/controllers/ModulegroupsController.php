<?php

class ModulegroupsController extends \BaseController {

	/**
	 * Display a listing of modulegroups
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Modulegroup::all();

		return View::make('modulegroups.index', compact('data'));
	}

	/**
	 * Show the form for creating a new modulegroup
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('modulegroups.create');
	}

	/**
	 * Store a newly created modulegroup in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Modulegroup::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Modulegroup::create($data);

		return Redirect::route('administrator.modulegroups.index');
	}

	/**
	 * Display the specified modulegroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$modulegroup = Modulegroup::findOrFail($id);

		return View::make('modulegroups.show', compact('modulegroup'));
	}

	/**
	 * Show the form for editing the specified modulegroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$modulegroup = Modulegroup::find($id);

		return View::make('modulegroups.edit', compact('modulegroup'));
	}

	/**
	 * Update the specified modulegroup in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$modulegroup = Modulegroup::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Modulegroup::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$modulegroup->update($data);

		return Redirect::route('administrator.modulegroups.index');
	}

	/**
	 * Remove the specified modulegroup from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Modulegroup::destroy($id);

		return Redirect::route('administrator.modulegroups.index');
	}

}
