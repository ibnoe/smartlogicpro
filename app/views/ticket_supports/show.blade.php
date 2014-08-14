@extends('layouts.master')



@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('marketing.ticket_supports.index') }}">Buku</a></li>

@stop

@section('content')
    {{ Form::open(array('class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Marketing') }}
	    {{ $ticketsupport->kd_marketing }}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Keterangan') }}
	    {{ $ticketsupport->keterangan }}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Lampiran') }}
	    {{ $ticketsupport->lampiran }}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Jenis Ticket') }}
	    {{ $ticketsupport->jenis_ticket }}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Status Ticket') }}
	    {{ $ticketsupport->status_ticket }}
	</div>
	<div class="uk-form-row">
	    <a href="{{ route('marketing.ticket_supports.index') }}">Kembali ke Halaman Support Ticket</a>
	</div>
	
    {{ Form::close() }}
@stop