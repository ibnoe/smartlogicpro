<?php

class TicketReply extends Eloquent {

	private $table = 'ticket_reply';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'kd_marketing' => 'required',
        'keterangan' => 'required',
        'jenis_ticket' => 'required',
        'status_ticket' => 'required',
	];

	// Don't forget to fill this array

	protected $fillable = ['kd_marketing','keterangan','lampiran','jenis_ticket', 'status_ticket'];
	
	public static function data()
		{
			return TicketSupport::orderBy('kd_marketing', 'asc')
			->paginate(10);
		}

	public static function set($id)
		{
			return TicketSupport::find($id);
		}


}

