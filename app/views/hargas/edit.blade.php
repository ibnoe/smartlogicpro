@extends('layouts.master')


@section('content')

     {{ Form::model($harga, array('url' => route('administrator.hargas.update', ['hargas'=>$harga->id]),  'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Harga') }}
	    {{ Form::text('kd_harga', $harga->kd_harga, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode harga...',
				'id'          => 'kd_harga',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Harga') }}
	    {{ Form::text('nama_harga', $harga->nama_harga, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan nama harga...',
				'id'          => 'nama_harga',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Harga') }}
	    {{ Form::text('harga', $harga->harga, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan banyak harga...',
				'id'          => 'harga',
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