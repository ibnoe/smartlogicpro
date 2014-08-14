<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if ( !Sentry::check())
    {
        return Redirect::guest('login')->with('errorMessage', 'Silahkan login terlebih dahulu.');
    }
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});
/*
|--------------------------------------------------------------------------
| Admin Filter
|--------------------------------------------------------------------------
|
| The "admin" filter check logged user permission is Admin.
*/
Route::filter('administrator', function()
{
    $user = Sentry::getUser();
    // Cari grup admin
    $administrator = Sentry::findGroupByName('administrator');
    if (!$user->inGroup($administrator)) {
        return Redirect::to('dashboard')->with("errorMessage", "Ooopppsss... Anda tidak tidak diizinkan untuk mengakses halaman itu.");
    }
});

/*
|--------------------------------------------------------------------------
| Administrator Owner User Filter
|--------------------------------------------------------------------------
|
| The "Administrator Owner" filter check logged user permission is Administrator Owner.
*/
Route::filter('administrator-owner', function() {
    $user = Sentry::getUser();
    // Cari grup regular
    $adminowner = Sentry::findGroupByName('administrator-owner');
    if (!$user->inGroup($adminowner)) {
        return Redirect::to('dashboard')->with("errorMessage", "Hanya Administrator Owner yang diizinkan untuk mengakses fitur tersebut.");
    }
});

/*
|--------------------------------------------------------------------------
| Marketing User Filter
|--------------------------------------------------------------------------
|
| The "Marketing" filter check logged user permission is Marketing.
*/
Route::filter('marketing', function() {
    $user = Sentry::getUser();
    // Cari grup regular
    $marketing = Sentry::findGroupByName('marketing');
    if (!$user->inGroup($marketing)) {
        return Redirect::to('dashboard')->with("errorMessage", "Hanya Marketing yang diizinkan untuk mengakses fitur tersebut.");
    }
});

/*
|--------------------------------------------------------------------------
| Karyawan User Filter
|--------------------------------------------------------------------------
|
| The "Karyawan" filter check logged user permission is Karyawan.
*/
Route::filter('karyawan', function() {
    $user = Sentry::getUser();
    // Cari grup regular
    $karyawan = Sentry::findGroupByName('karyawan');
    if (!$user->inGroup($karyawan)) {
        return Redirect::to('dashboard')->with("errorMessage", "Karyawan hanya diizinkan untuk mengakses fitur tersebut.");
    }
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::guest()) return Redirect::guest('login');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});