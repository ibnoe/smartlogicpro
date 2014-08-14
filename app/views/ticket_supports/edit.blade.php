@extends('layouts.master')


@section('content')

     {{ Form::model($ticketsupport, array('url' => route('marketing.ticket_supports.update', ['ticketsupports'=>$ticketsupport->id]),  'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Marketing') }}
	    {{ Form::text('kd_marketing', $ticketsupport->kd_marketing, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan kode marketing...',
				'id'          => 'kd_marketing',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Keterangan') }}
	    {{ Form::textarea('keterangan', $ticketsupport->keterangan, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan keterangan...',
				'id'          => 'keterangan',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Keterangan') }}
	    {{ Form::file('lampiran', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Attachment...',
				'id'          => 'keterangan',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Jenis Ticket') }}
	    {{ Form::Radio('jenis_ticket','low', ($ticketsupport->jenis_ticket == 'low') ? true : false ) }} Low
	    {{ Form::Radio('jenis_ticket','normal', ($ticketsupport->jenis_ticket == 'normal') ? true : false ) }} Normal
	    {{ Form::Radio('jenis_ticket','urgent', ($ticketsupport->jenis_ticket == 'urgent') ? true : false ) }} Urgent
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Status Ticket') }}
	    {{ Form::Radio('status_ticket','open', ($ticketsupport->status_ticket == 'open') ? true : false ) }} Open
	    {{ Form::Radio('status_ticket','closed', ($ticketsupport->status_ticket == 'closed') ? true : false ) }} Closed
	</div>

{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
  
@stop