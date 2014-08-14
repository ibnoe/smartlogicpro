<?php

class AgendasController extends \BaseController {

	/**
	 * Display a listing of agendas
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
            if(Datatable::shouldHandle())
		    {	
		        return Datatable::collection(Agenda::all(array('id','kd_marketing','kd_agenda','nama_agenda','keterangan')))
		            ->showColumns('kd_marketing','kd_agenda','nama_agenda','keterangan')
		            ->addColumn('', function ($model) {
	                    $html = '<a href="'.route('administrator.agendas.edit', ['agendas'=>$model->id]).'" class="uk-button uk-button-small uk-button-link">Edit</a> ';
	                    $html .= Form::open(array('url' => route('administrator.agendas.destroy', ['agendas'=>$model->id]), 'method'=>'delete', 'class'=>'uk-display-inline'));
						$html .= Form::submit('delete', array('class' => 'uk-button uk-button-small'));
						$html .= Form::close();
						return $html;
	                })
		            ->searchColumns('nama_agenda')
		            ->orderColumns('nama_agenda')
		            ->make();
		    }
        }
		// is administrator-owner
        if ($user->inGroup($administratorowner)) {
            if(Datatable::shouldHandle())
		    {	
		        return Datatable::collection(Agenda::all(array('id','kd_marketing','kd_agenda','nama_agenda','keterangan')))
		            ->showColumns('kd_marketing','kd_agenda','nama_agenda','keterangan')
		            ->addColumn('', function ($model) {
	                    $html = '<a href="'.route('adminowner.agendas.edit', ['agendas'=>$model->id]).'" class="uk-button uk-button-small uk-button-link">Edit</a> ';
	                    $html .= Form::open(array('url' => route('adminowner.agendas.destroy', ['agendas'=>$model->id]), 'method'=>'delete', 'class'=>'uk-display-inline'));
						$html .= Form::submit('delete', array('class' => 'uk-button uk-button-small'));
						$html .= Form::close();
						return $html;
	                })
		            ->searchColumns('nama_agenda')
		            ->orderColumns('nama_agenda')
		            ->make();
		    }
        }
		// is Marketing
        if ($user->inGroup($marketing)) {
            if(Datatable::shouldHandle())
		    {	
		        return Datatable::collection(Agenda::all(array('id','kd_marketing','kd_agenda','nama_agenda','keterangan')))
		            ->showColumns('kd_marketing','kd_agenda','nama_agenda','keterangan')
		            ->addColumn('', function ($model) {
	                    $html = '<a href="'.route('marketing.agendas.edit', ['agendas'=>$model->id]).'" class="uk-button uk-button-small uk-button-link">Edit</a> ';
	                    $html .= Form::open(array('url' => route('marketing.agendas.destroy', ['agendas'=>$model->id]), 'method'=>'delete', 'class'=>'uk-display-inline'));
						$html .= Form::submit('delete', array('class' => 'uk-button uk-button-small'));
						$html .= Form::close();
						return $html;
	                })
		            ->searchColumns('nama_agenda')
		            ->orderColumns('nama_agenda')
		            ->make();
		    }
        }
		
		return View::make('agendas.index')->withTitle('Agenda');
	}

	/**
	 * Show the form for creating a new agenda
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('agendas.create')->withTitle('Tambah Agemda');
	}

	/**
	 * Store a newly created agenda in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Agenda::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Agenda::create($data);

		return Redirect::route('marketing.agendas.index')->with("successMessage", "Berhasil menyimpan $agenda->nama_agenda ");
	}

	/**
	 * Display the specified agenda.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$agenda = Agenda::findOrFail($id);

		return View::make('agendas.show', ['agenda'=>$agenda])->withTitle("Detail $agenda->nama_agenda");
	}

	/**
	 * Show the form for editing the specified agenda.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$agenda = Agenda::find($id);
		//return View::make('agendas.edit', compact('agenda'));
		return View::make('agendas.edit', ['agenda'=>$agenda])->with('agenda');
	}

	/**
	 * Update the specified agenda in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$agenda = Agenda::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Agenda::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$agenda->update($data);

		//return Redirect::route('agendas.index');
		return Redirect::route('administrator.agendas.index')->with("successMessage", "Berhasil menyimpan $agenda->nama_agenda");
	}

	/**
	 * Remove the specified agenda from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		if (!Agenda::destroy($id))
		{
			return Redirect::back();
		}

		return Redirect::route('administrator.agendas.index')->with('successMessage', 'Agenda berhasil dihapus.');
	}

}
