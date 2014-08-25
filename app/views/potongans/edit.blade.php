@extends('layouts.master')
@section('content')
     {{ Form::model($potongan, array('url' => route('administrator.potongans.update', ['potongans'=>$potongan->id]),  'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Potongan') }}
	    {{ Form::text('kode_potongan', $potongan->kode_potongan, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode potongan...',
				'id'          => 'kode_potongan',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Potongan') }}
	    {{ Form::text('nama_potongan', $potongan->nama_potongan, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan nama potongan...',
				'id'          => 'nama_potongan',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Update') }}
</div>

    {{ Form::close() }}
@stop