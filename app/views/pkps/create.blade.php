@extends('layouts.master')

@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('administrator.agamas.index') }}">Agama</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('administrator.pkps.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row {{ ($errors->has('kode_pkp') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Kode PKP') }}
	    {{ Form::text('kode_pkp', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode PKP...',
				'id'          => 'kode_pkp',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('kode_pkp', 'Kode PKP harus diisi') }}
	</div>
	<div class="uk-form-row {{ ($errors->has('batas_pkp') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Batas PKP') }}
	    {{ Form::text('batas_pkp', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan batas PKP...',
				'id'          => 'batas_pkp',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('batas_pkp', 'Batas PKP harus diisi') }}
	</div>
	<div class="uk-form-row {{ ($errors->has('tarif') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Tarif PKP') }}
	    {{ Form::text('tarif', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan tarif PKP...',
				'id'          => 'tarif',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('tarif', 'Tarif PKP harus diisi dan merupakan angka') }}
	</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
@stop