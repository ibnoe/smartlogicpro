@extends('layouts.master')


@section('content')

     {{ Form::model($agama, array('url' => route('administrator.agamas.update', ['agamas'=>$agama->id]),  'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Agama') }}
	    {{ Form::text('kd_agama', $agama->kd_agama, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode marketing...',
				'id'          => 'kd_marketing',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Agama') }}
	    {{ Form::text('nama', $agama->nama, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan nama agama...',
				'id'          => 'keterangan',
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