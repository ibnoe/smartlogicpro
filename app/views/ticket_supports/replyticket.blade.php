@extends('layouts.master')



@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('marketing.ticket_supports.index') }}">Buku</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('marketing.ticket_supports.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Marketing') }}
	    {{ Form::text('kd_marketing', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan kode marketing...',
				'id'          => 'kd_marketing',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Keterangan') }}
	    {{ Form::textarea('keterangan', null, array(
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
	    {{ Form::radio('jenis_ticket', 'low', true) }} Low
	    {{ Form::radio('jenis_ticket', 'normal', false) }} Normal
	    {{ Form::radio('jenis_ticket', 'urgent', false) }} Urgent
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Status Ticket') }}
	    {{ Form::radio('status_ticket', 'open', true) }} Open
	    {{ Form::radio('status_ticket', 'closed', false) }} Closed
	</div>

{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
@stop