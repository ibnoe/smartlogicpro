@extends('layouts.master')



@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('administrator.jabatans.index') }}">Jabatan</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('administrator.jabatans.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row {{ ($errors->has('kd_jab') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Kode Jabatan') }}
	    {{ Form::text('kd_jab', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode jabatan...',
				'id'          => 'kd_jab',
				'maxlength'   => '10'
			)) 
		}}
		{{ $errors->first('kd_jab', 'Kode Jabatan harus kurang dari 10 karakter') }}
	</div>
	
	<div class="uk-form-row {{ ($errors->has('nama_jabatan') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Nama Jabatan') }}
	    {{ Form::text('nama_jabatan', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan nama jabatan...',
				'id'          => 'nama_jabatan',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('nama_jabatan', 'Nama Jabatan harus kurang dari 50 karakter') }}
	</div>

	<div class="uk-form-row {{ ($errors->has('tun_kes') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Tunjangan Kesehatan') }}
	    {{ Form::text('tun_kes', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan banyak harga tunjangan kesehatan...',
				'id'          => 'tun_kes',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('tun_kes', 'Nama tunjangan kesehatan harus kurang dari 50 karakter') }}
	</div>

	<div class="uk-form-row {{ ($errors->has('tun_mkn') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Tunjangan Makanan') }}
	    {{ Form::text('tun_mkn', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan banyak harga tunjangan makanan...',
				'id'          => 'tun_mkn',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('tun_mkn', 'Nama tunjangan makanan harus kurang dari 50 karakter') }}
	</div>

	<div class="uk-form-row {{ ($errors->has('tun_transport') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Tunjangan Transportasi') }}
	    {{ Form::text('tun_transport', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan banyak harga tunjangan transportasi...',
				'id'          => 'tun_transport',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('tun_transport', 'Nama tunjangan transportasi harus kurang dari 50 karakter') }}
	</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
@stop