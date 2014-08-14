<?php

class HomeController extends BaseController {

	/**
     * Layout yang akan digunakan untuk controller ini
     */
    protected $layout = 'layouts.master';

    /**
     * Tampilkan halaman dashboard
     * @return [type] [description]
     */
	public function dashboard()
	{

        $user = Sentry::getUser();
        $administrator = Sentry::findGroupByName('administrator');
        $administratorowner = Sentry::findGroupByName('administrator-owner');
        $marketing = Sentry::findGroupByName('marketing');
        $karyawan = Sentry::findGroupByName('karyawan');
        
        // is administrator
        if ($user->inGroup($administrator)) {
            $this->layout->content = View::make('dashboard.administrator')->withTitle('Dashboard Administrator');
        }
		// is administrator-owner
        if ($user->inGroup($administratorowner)) {
            $this->layout->content = View::make('dashboard.adminowner')->withTitle('Dashboard Administrator Owner');
        }
		// is Marketing
        if ($user->inGroup($marketing)) {
            $data = Agenda::all();
           $this->layout->content = View::make('dashboard.marketing')->with('data', $data);
            //turn $this->layout->content = View::make('dashboard.marketing', compact('data'));
            //$data2 = TicketSupport::all();
           //$this->layout->content = View::make('dashboard.marketing')->compact('data2', $data2);
            //return $this->layout->content = View::make('dashboard.marketing', compact('data2'));
        }
        // is Karyawan
        if ($user->inGroup($karyawan)) {
            $this->layout->content = View::make('dashboard.penjualan')->withTitle('Dashboard Penjualan');
        }
		

		
		
	}

    /**
     * Autentikasi user
     * @return response
     */
    public function showWaitingList(){
        $data = Owner::data();

    }
    public function authenticate()
    {
        // Ambil credentials dari $_POST variable
        $credentials = array(
            'email'    => Input::get('email'),
            'password' => Input::get('password'),
        );

        try {
            // authentikasi user
            Sentry::authenticate($credentials, false);

            // Kembalikan user ke dashboard
            return Redirect::intended('dashboard');
        } catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
            return Redirect::back()->with('errorMessage', 'Password yang Anda masukan salah.');
        } catch (Exception $e) {
            return Redirect::back()->with('errorMessage', trans('Akun dengan email tersebut tidak ditemukan di sistem kami.'));
        }
    }

    /**
     * Logout User
     * @return response
     */
    public function logout()
    {
        // Logout user
        Sentry::logout();
        // Redirect user ke halaman login
        return Redirect::to('login')->with('successMessage', 'Anda berhasil logout.');
    }

    public function editPassword()
    {
        $this->layout->content = View::make('dashboard.editpassword')
            ->withTitle('Ubah Password');
    }

    /**
     * Ubah password user
     * @return response
     */
    public function updatePassword()
    {
        $user = Sentry::getUser();

        // validasi password lama
        if(!$user->checkPassword(Input::get('oldpassword'))) {
            return Redirect::back()->with('errorMessage', 'Password Lama Anda salah.');
        }

        // validasi konfirmasi password baru
        $rules = array('newpassword' => 'confirmed|required|min:5');
        $validator = Validator::make($data = Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        // Simpan password baru
        $user->password = Input::get('newpassword');
        $user->save();

        // Redirect ke halaman sebelumnya
        return Redirect::back()->with('successMessage', 'Password berhasil diubah.');
    }
}