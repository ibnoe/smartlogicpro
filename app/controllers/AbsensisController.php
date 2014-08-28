<?php

class AbsensisController extends \BaseController {

	/**
	 * Display a listing of absensis
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Absensi::dataindex();

		return View::make('absensis.index', compact('data'));
	}

	/**
	 * Show the form for creating a new absensi
	 *
	 * @return Response
	 */
	public function create()
	{
		$datalist = array('placeholder' => 'Masukkan Owner Perusahaan') + 
		DB::table('users')
		->join('users_groups', 'users.id', '=', 'users_groups.user_id')
		->join('groups', 'users_groups.group_id', '=', 'groups.id')
		->join('perusahaans', 'users.id', '=', 'perusahaans.users_id')
		->lists('first_name','users_id');
		
		
		return View::make('absensis.create')
		->with('datalist',$datalist)
		;
	}

	/**
	 * Store a newly created absensi in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Absensi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Absensi::create($data);

		return Redirect::route('administrator.absensis.index');
	}

	/**
	 * Display the specified absensi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$absensi = Absensi::findOrFail($id);

		return View::make('absensis.show', compact('absensi'));
	}

	/**
	 * Show the form for editing the specified absensi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$absensi = Absensi::find($id);

		return View::make('absensis.edit', compact('absensi'));
	}

	/**
	 * Update the specified absensi in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$absensi = Absensi::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Absensi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$absensi->update($data);

		return Redirect::route('administrator.absensis.index');
	}

	/**
	 * Remove the specified absensi from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Absensi::destroy($id);

		return Redirect::route('administrator.absensis.index');
	}

}
