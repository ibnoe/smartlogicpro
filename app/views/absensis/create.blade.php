@extends('layouts.master')

@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('administrator.agamas.index') }}">Agama</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('administrator.absensis.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row {{ ($errors->has('kd_agama') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Kode Agama') }}
	    {{ Form::text('kd_agama', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode agama...',
				'id'          => 'kd_agama',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('kd_agama', 'Kode Agama harus kurang dari 10 karakter') }}
	</div>
	<div class="uk-form-row {{ ($errors->has('nama') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Nama Agama') }}
	    {{ Form::text('nama', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan nama agama...',
				'id'          => 'nama',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('nama', 'Nama Agama harus kurang dari 50 karakter') }}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Status Module') }}
	    {{ Form::radio('status_module', 'active', true) }} Active
	    {{ Form::radio('status_module', 'inactive', false) }} Inactive
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Status Module') }}
	    {{ Form::radio('status_module', 'active', true) }} Active
	    {{ Form::radio('status_module', 'inactive', false) }} Inactive
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Status Module') }}
	    {{ Form::radio('status_module', 'active', true) }} Active
	    {{ Form::radio('status_module', 'inactive', false) }} Inactive
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Status Module') }}
	    {{ Form::radio('status_module', 'active', true) }} Active
	    {{ Form::radio('status_module', 'inactive', false) }} Inactive
	</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
@stop