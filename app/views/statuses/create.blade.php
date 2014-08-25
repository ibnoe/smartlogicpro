@extends('layouts.master')

@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('administrator.ptkps.index') }}">PTKP</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('administrator.statuses.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row {{ ($errors->has('nama_status') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Nama Status') }}
	    {{ Form::text('nama_status', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan nama status...',
				'id'          => 'nama_status',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('nama_status', 'Kode Golongan harus kurang dari 10 karakter') }}
	</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
@stop