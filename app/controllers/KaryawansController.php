<?php

class KaryawansController extends \BaseController {

	/**
	 * Display a listing of karyawans
	 *
	 * @return Response
	 */
	public function index()
	{
		$karyawans = Karyawan::all();

		return View::make('karyawans.index', compact('karyawans'));
	}
	
	
    /**
     * Tampilkan halaman profile karyawan
     * @return response
     */
    public function profilekaryawan()
    {
    	$user = Sentry::getUser();
    	return View::make('profilekaryawan.show')->withTitle('Profilkaryawan')
    	    ->withUser($user);
    }	
	

    /**
     * Tampilkan halaman edit profile karyawan
     * @return response
     */
    public function editProfilekaryawan()
    {
        return View::make('profilekaryawan.edit')->withTitle('Perbaharui Profil Karyawan')
                ->withUser(Sentry::getUser());
    }	
	
	
    /**
     * Ubah profile karyawan
     * @return response
     */
    public function updateProfilekaryawan()
    {
        $user = Sentry::getUser();
        try
        {
            // Perbaharui data karyawan
            $user->email = Input::get('email');
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->save();

            // Simpan data karyawan
            if ($user->save())
            {
                return Redirect::route('member.profilekaryawan')->with('successMessage', 'Profil karyawan berhasil diperbaharui.');
            }
        }
        catch (Cartalyst\Sentry\Users\UserExistsException $e)
        {
            return Redirect::back()->with('errorMessage', $e->getMessage())->withInput();
        }
    }	
	
	
	
	
	
	
	/**
	 * Show the form for creating a new karyawan
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('karyawans.create');
	}

	/**
	 * Store a newly created owner in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Karyawan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Owner::create($data);

		return Redirect::route('karyawans.index');
	}

	/**
	 * Display the specified owner.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$owner = Owner::findOrFail($id);

		return View::make('owners.show', compact('owner'));
	}

	/**
	 * Show the form for editing the specified owner.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$owner = Owner::find($id);

		return View::make('owners.edit', compact('owner'));
	}

	/**
	 * Update the specified owner in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$owner = Owner::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Owner::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$owner->update($data);

		return Redirect::route('owners.index');
	}

	/**
	 * Remove the specified owner from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Owner::destroy($id);

		return Redirect::route('owners.index');
	}

}
