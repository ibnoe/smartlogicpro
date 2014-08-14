<?php

Route::get('/', 'GuestController@index');
Route::get('datatable/books/borrow', array('as'=>'datatable.books.borrow', 'uses'=>'BooksController@borrowDatatable'));


 /**
 * penjualan
 */

Route::resource('penjualan', 'PenjualanController', array(
  'except' => array('show')
));

/**
 * end of penjualan
 */


 
   /**
 * laporan penjualan ekspots
 */
Route::get('laporan1111a1/pdf', array(
  'as'   => 'pdf_laporan1111a1',
  'uses' => 'Laporan1111a1Controller@pdf'
));
  
 
 
   /**
 * laporan penjualan faktur lengkaps
 */
Route::get('laporan1111a2/pdf', array(
  'as'   => 'pdf_laporan1111a2',
  'uses' => 'Laporan1111a2Controller@pdf'
));
 
 
 
  /**
 * laporan 1111B1
 */
Route::get('laporan1111b1/pdf', array(
  'as'   => 'pdf_laporan1111b1',
  'uses' => 'Laporan1111b1Controller@pdf'
));
 
 
 /**
 * laporan 1111B2
 */
Route::get('laporan1111b2/pdf', array(
  'as'   => 'pdf_laporan1111b2',
  'uses' => 'Laporan1111b2Controller@pdf'
));



	
 /**
 * end laporan 1111B2
 */
 
 
 
 /**
 * laporan 1111B3
 */
Route::get('laporan1111b3/pdf', array(
  'as'   => 'pdf_laporan1111b3',
  'uses' => 'Laporan1111b3Controller@pdf'
));

 /**
 * end laporan 1111B3
 */



Route::group(array('before' => 'auth'), function () {
    Route::get('dashboard', array('as'=>'dashboard', 'uses'=>'HomeController@dashboard'));
    Route::get('books', array('as'=>'member.books', 'uses'=>'MemberController@books'));
    Route::get('profile', array('as'=>'member.profile', 'uses'=>'MemberController@profile'));
    Route::get('profile/edit', array('as'=>'member.profile.edit', 'uses'=>'MemberController@editProfile'));
    Route::post('profile', array('as'=>'member.profile.update', 'uses'=>'MemberController@updateProfile'));
    Route::get('editpassword', array('as'=>'home.editpassword', 'uses'=>'HomeController@editPassword'));
    Route::post('updatepassword', array('as'=>'home.updatepassword', 'uses'=>'HomeController@updatePassword'));
    Route::get('books/{book}/borrow', array('as'=>'books.borrow', 'uses'=>'BooksController@borrow'));
    Route::get('books/{book}/return', array('as'=>'books.return', 'uses'=>'BooksController@returnBack'));

Route::get('penjualan', 'PenjualanController@penjualan'); 
	
    Route::group(array('prefix' => 'administrator', 'before' => 'administrator'), function()
    {
        Route::resource('authors', 'AuthorsController');
        Route::resource('books', 'BooksController');
        Route::resource('users', 'UsersController');
        Route::resource('agendas', 'AgendasController');
        Route::resource('agamas', 'AgamasController');
        Route::resource('jabatans', 'JabatansController');
        Route::resource('golongans', 'GolongansController');
        Route::resource('ptkps', 'PtkpsController');
        Route::resource('perusahaans', 'PerusahaansController');
        Route::resource('marketings', 'MarketingsController');
        Route::resource('karyawans', 'KaryawansController');
        Route::resource('owners', 'OwnersController');
        Route::resource('hargas', 'HargasController');
        Route::resource('potongans', 'PotongansController');
        Route::resource('pkps', 'PkpsController');
        Route::resource('absensis', 'AbsensisController');
        Route::resource('tunjangans', 'TunjangansController');
        Route::resource('detailgajis', 'DetailgajisController');
        Route::resource('lemburs', 'LembursController');
        Route::resource('pphs', 'PphsController');
        Route::resource('penilaians', 'PenilaiansController');
        Route::resource('pph42s', 'Pph42sController');
        Route::resource('gajis', 'GajisController');
        Route::resource('ppns', 'PpnsController');
        Route::resource('statuses', 'StatusesController');
        Route::resource('departements', 'DepartementsController');
        Route::resource('owners', 'OwnersController');
        Route::resource('usermodules', 'UserModulesController');
        Route::resource('modulegroups', 'ModuleGroupsController');
        Route::resource('modules', 'ModulesController');
        Route::resource('ticket_supports', 'TicketSupportsController');
        Route::get('usermodules/addownermodules/{id}', array('as'=>'administrator.usermodules.addownermodules', 'uses'=>'UserModulesController@addownermodules'));
        Route::get('borrow', array('as'=>'administrator.borrow', 'uses'=>'BorrowController@index'));
        Route::get('borrow/return/{id}', array('as'=>'administrator.borrow.return', 'uses'=>'BorrowController@returnBack'));
    });
    Route::group(array('prefix' => 'adminowner', 'before' => 'adminowner'), function(){


    });
    Route::group(array('prefix' => 'marketing', 'before' => 'marketing'), function(){
        Route::resource('agendas', 'AgendasController');
        Route::resource('owners', 'OwnersController');
        Route::resource('ticket_supports', 'TicketSupportsController');
        Route::resource('books', 'BooksController');

    });
	
	
    Route::group(array('prefix' => 'karyawan', 'before' => 'karyawan'), function(){
		Route::get('profilekaryawan', array('as'=>'member.profilekaryawan', 'uses'=>'KaryawansController@profilekaryawan'));
		Route::get('profilekaryawan/edit', array('as'=>'member.profilekaryawan.edit', 'uses'=>'KaryawansController@editProfilekaryawan'));
		Route::post('profilekaryawan', array('as'=>'member.profilekaryawan.update', 'uses'=>'KaryawansController@updateProfilekaryawan'));
		
		Route::resource('penjualanfakturlengkaps', 'PenjualanfakturlengkapsController');
		Route::resource('tanpafakturlengkaps', 'TanpafakturlengkapsController');
		Route::resource('pembelianimports', 'PembelianimportsController');
		Route::resource('penjualaneksports', 'PenjualaneksportsController');
		Route::resource('pembeliandlmnegeris', 'PembeliandlmnegerisController');
		
		Route::resource('interfacepenjualan', 'PenjualansController');
		Route::resource('interfacepembelian', 'PembelianinterfacesController');
		
	});

});

Route::get('login', array('as'=>'layouts.guest', 'uses'=>'GuestController@login'));

Route::post('authenticate', 'HomeController@authenticate');
Route::get('logout', 'HomeController@logout');
Route::get('signup', array('as'=>'guest.signup', 'uses'=>'GuestController@signup'));
Route::post('register', array('as'=>'guest.register', 'uses'=>'GuestController@register'));
Route::get('activate', array('as'=>'user.activate', 'uses'=>'GuestController@activate'));
Route::get('forgot', array('as'=>'guest.forgot', 'uses'=>'GuestController@forgotPassword'));
Route::post('sendresetcode', array('as'=>'guest.sendresetcode', 'uses'=>'GuestController@sendResetCode'));
Route::get('reset', array('as'=>'guest.createnewpassword', 'uses'=>'GuestController@createNewPassword'));
Route::post('reset', array('as'=>'guest.storenewpassword', 'uses'=>'GuestController@storeNewPassword'));

?>