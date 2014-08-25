@extends('layouts.master')

@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('administrator.agamas.index') }}">Agama</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('administrator.potongans.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row {{ ($errors->has('kode_potongan') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Kode Potongan') }}
	    {{ Form::text('kode_potongan', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode potongan...',
				'id'          => 'kode_potongan',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('kode_potongan', 'Kode Potongan harus kurang dari 10 karakter') }}
	</div>
	<div class="uk-form-row {{ ($errors->has('nama_potongan') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Nama Potongan') }}
	    {{ Form::text('nama_potongan', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan nama potongan...',
				'id'          => 'nama_potongan',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('nama_potongan', 'Nama potongan harus kurang dari 50 karakter') }}
	</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
@stop