@extends('layouts.master')


@section('content')

     {{ Form::model($departement, array('url' => route('administrator.departements.update', ['departements'=>$departement->id]),  'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Departement') }}
	    {{ Form::text('kd_dep', $departement->kd_dep, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode departement...',
				'id'          => 'kd_dep',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Departement') }}
	    {{ Form::text('nama_dep', $departement->nama_dep, array(
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