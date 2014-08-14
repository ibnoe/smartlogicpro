@extends('layouts.master')



@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Departement</a></li>
    <li><a href="{{ route('administrator.departements.index') }}">Departement</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('administrator.departements.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Departement') }}
	    {{ Form::text('kd_dep', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode departement...',
				'id'          => 'kd_dep',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Departement') }}
	    {{ Form::text('nama_dep', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan nama departement...',
				'id'          => 'nama_dep',
				'maxlength'   => '50'
			)) 
		}}
	</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
@stop