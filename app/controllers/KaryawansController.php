<?php

class KaryawansController extends \BaseController {

	/**
	 * Display a listing of karyawans
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Karyawan::data();

		return View::make('karyawans.index', compact('data'));
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
		
		$datalist = array('placeholder' => 'Masukkan Owner Perusahaan') + DB::table('users')
		->join('users_groups', 'users.id', '=', 'users_groups.user_id')
		->join('groups', 'users_groups.group_id', '=', 'groups.id')
		->join('perusahaans', 'users.id', '=', 'perusahaans.users_id')
		->lists('first_name','users_id');
		
		$data = array('placeholder' => 'Masukkan Nama Perusahaan') + DB::table('users')
		->join('users_groups', 'users.id', '=', 'users_groups.user_id')
		->join('groups', 'users_groups.group_id', '=', 'groups.id')
		->join('perusahaans', 'users.id', '=', 'perusahaans.users_id')
		->lists('nama_perusahaan','users_id');
		return View::make('karyawans.create')
		->with('datalist',$datalist)
		->with('data',$data)
		;
	}

	/**
	 * Store a newly created owner in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), User::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        // Register User tanpa diaktivasi
        $user = Sentry::register(array(
		'email'    => Input::get('email'),
		'password' => Input::get('password'),
		'first_name' => Input::get('first_name'),
		'last_name' => Input::get('last_name'),
		'uid' => Input::get('uid')
        ), false);
		
        $ownerGroup = Sentry::findGroupByName('administrator-owner');
		
        // Masukkan user ke grup regular
        $user->addGroup($ownerGroup);
        //data owner
		
        $karyawan_data = array(
        'uid' => Input::get('uid'),
        'kd_agama' => Input::get('kd_perusahaan'),
		'kd_jabatan' => Input ::get('kd_karyawan'),
        'kd_gol' => Input::get('kd_gol'),
        'kd_statuskawin' => Input::get('kd_statuskawin'),
        'kd_karyawan' => Input::get('kd_karyawan'),
        'uid_owner' => Input::get('uid_owner'),
        'id_perusahaan' => Input::get('id_perusahaan'),
        'nik' => Input::get('nik'),
        'jen_kel' => Input::get('jen_kel'),
        'tempat_lahir' => Input::get('tempat_lahir'),
        'tgl_lahir' => Input::get('tgl_lahir'),
        'pendidikan' => Input::get('pendidikan'),
        'tgl_masuk' => Input::get('tgl_masuk'),
        //'tgl_keluar' => Input::get('tgl_keluar'),
        'alamat' => Input::get('alamat'),
        'desa' => Input::get('desa'),
        'kota' => Input::get('kota'),
        'propinsi' => Input::get('propinsi'),
        'kode_pos' => Input::get('kode_pos'),
        'no_telephone' => Input::get('no_telephone'),
        'no_handphone' => Input::get('no_handphone'),
        'npwp' => Input::get('npwp'),
        'foto' => Input::get('foto')
        );   
        // Cari grup regular
        
        Karyawan::create($userdata);
		
        // Persiapkan activation code untuk dikirim ke email
        $data = [
		'email'=>$user->email,
		// Generate kode aktivasi
		'activationCode'=>$user->getActivationCode()
        ];
		
        // Redirect ke halaman login
        
		return Redirect::route('administrator.karyawans.index');
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
		$karyawan = Karyawan::find($id);

		return View::make('karyawans.edit', compact('karyawan'));
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
