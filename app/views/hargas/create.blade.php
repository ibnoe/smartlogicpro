@extends('layouts.master')

@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('administrator.hargas.index') }}">Harga</a></li>

@stop
@section('content')
    {{ Form::open(array('url' => route('administrator.hargas.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
    <div class="uk-form-row {{ ($errors->has('kd_harga') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Kode Harga') }}
	    {{ Form::text('kd_harga', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan Kode Harga...',
				'id'          => 'kd_harga',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('kd_harga', 'Kode Harga harus diisi') }}
	</div>
	<div class="uk-form-row {{ ($errors->has('nama_harga') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Nama Harga') }}
	    {{ Form::text('nama_harga', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan Nama Harga...',
				'id'          => 'nama_harga',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('nama_harga', 'Nama Harga harus diisi') }}
	</div>
	<div class="uk-form-row {{ ($errors->has('harga') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Nama Agama') }}
	    {{ Form::text('harga', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan Harga...',
				'id'          => 'harga',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('harga', 'Harga harus diisi dan merupakan angka') }}
	</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
@stop