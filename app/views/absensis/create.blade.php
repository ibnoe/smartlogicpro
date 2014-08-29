@extends('layouts.master')

@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('administrator.absensis.index') }}">Agama</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('administrator.absensis.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row {{ ($errors->has('uid_karyawan') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Nama uid_karyawan') }}
	    {{ Form::text('uid_karyawan', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan nama uid_karyawan...',
				'id'          => 'uid_karyawan',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('uid_karyawan', 'Nama Agama harus kurang dari 50 karakter') }}
	</div>
	<div class="uk-form-row {{ ($errors->has('kd_absen') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Kode kd_absensi') }}
	    {{ Form::text('kd_absensi', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode agama...',
				'id'          => 'kd_absensi',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('kd_absensi', 'Kode kd_absensi harus kurang dari 10 karakter') }}
	</div>
{{ Form::hidden('tanggal', date('Y-m-d')) }}
	<div class="uk-form-row {{ ($errors->has('cuti') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Kode cuti') }}
	    {{ Form::text('cuti', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode agama...',
				'id'          => 'cuti',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('cuti', 'Kode kd_absensi harus kurang dari 10 karakter') }}
	</div>
	<div class="uk-form-row {{ ($errors->has('ijin') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Kode ijin') }}
	    {{ Form::text('ijin', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode agama...',
				'id'          => 'ijin',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('ijin', 'Kode kd_absensi harus kurang dari 10 karakter') }}
	</div>
	<div class="uk-form-row {{ ($errors->has('sakit') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Kode ijin') }}
	    {{ Form::text('sakit', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode agama...',
				'id'          => 'sakit',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('sakit', 'Kode kd_absensi harus kurang dari 10 karakter') }}
	</div>
	<div class="uk-form-row {{ ($errors->has('alpha') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Kode alpha') }}
	    {{ Form::text('alpha', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode agama...',
				'id'          => 'alpha',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('alpha', 'Kode kd_absensi harus kurang dari 10 karakter') }}
	</div>

	
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
@stop