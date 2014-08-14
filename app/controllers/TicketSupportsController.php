<?php

class TicketSupportsController extends \BaseController {

	 

	/**
	 * Display a listing of ticketsupports
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = Sentry::getUser();
        $administrator = Sentry::findGroupByName('administrator');
        $administratorowner = Sentry::findGroupByName('administrator-owner');
        $marketing = Sentry::findGroupByName('marketing');
        $karyawan = Sentry::findGroupByName('karyawan');

        if ($user->inGroup($administrator)) {
            $data = TicketSupport::all();
            return View::make('ticket_supports.index')->with('data', $data);
        }
		// is administrator-owner
        if ($user->inGroup($administratorowner)) {
            
        }
		// is Marketing
        if ($user->inGroup($marketing)) {
            $data = TicketSupport::all();
            return View::make('ticket_supports.index')->with('data', $data);
        }
		
		//return View::make('ticket_supports.index')->withTitle('Ticket Support');

	}

	/**
	 * Show the form for creating a new ticketsupport
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ticket_supports.create');
	}

	/**
	 * Store a newly created ticketsupport in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Ticketsupport::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Ticketsupport::create($data);

		return Redirect::route('ticket_supports.index');
	}

	/**
	 * Display the specified ticketsupport.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ticketsupport = Ticketsupport::findOrFail($id);

		return View::make('ticket_supports.show', compact('ticketsupport'));
	}

	/**
	 * Show the form for editing the specified ticketsupport.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ticketsupport = Ticketsupport::find($id);

		return View::make('ticket_supports.edit', compact('ticketsupport'));
	}
/**	
	public function replyticket($id)
	{
		$ticketsupport = Ticketsupport::find($id);

		return View::make('ticket_supports.replyticket', compact('ticketsupport'));
	}
	public function reply($id)
	{
		$validator = Validator::make($data = Input::all(), Ticketsupport::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Ticketsupport::create($data);

		return Redirect::route('ticket_supports.index');

		return Redirect::route('marketing.ticket_supports.index')->with("successMessage", "Berhasil menyimpan $ticketsupport->name ");
	}
*/
	/**
	 * Update the specified ticketsupport in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$ticketsupport = Ticketsupport::findOrFail($id);

		$validator = Validator::make($data = Input::all(), TicketSupport::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$ticketsupport->update($data);

		return Redirect::route('marketing.ticket_supports.index')->with("successMessage", "Berhasil menyimpan $ticketsupport->name ");



		
	}
	
	/**
	 * Remove the specified ticketsupport from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Ticketsupport::destroy($id);

		return Redirect::route('ticket_supports.index');
	}
	public function hapus($id) {
		# Hapus biodata berdasarkan id
		Ticketsupport::find($id)->delete();
		# Kembali kehalaman yang sama dengan pesan sukses
		return Redirect::back()->withPesan('Ticket Support berhasil dihapus.');
	}

}
