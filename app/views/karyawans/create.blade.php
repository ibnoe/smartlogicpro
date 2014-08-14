@extends('layouts.master')

@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('administrator.karyawans.index') }}">Tambah Karyawan baru</a></li>

@stop

@section('content')
{{ Form::open(array('url' => route('administrator.karyawans.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
{{ Form::hidden('uid', Str::random(20, 'numeric')) }}
{{ Form::hidden('tanggal_masuk', date('Y-m-d')) }}
<div class="uk-form-row {{ ($errors->has('first_name') ? 'has-error' : '') }}">
{{ Form::labelUk('title', 'Nama Depan') }}
{{ Form::text('first_name', null, array(
		'class'       => 'uk-form-width-large',
		'placeholder' => 'Masukkan Nama Depan...',
		'id'          => 'first_name',
		'maxlength'   => '50'
	)) 
}}
{{ $errors->first('first_name', 'Nama Depan harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('last_name') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'Nama Belakang') }}
	{{ Form::text('last_name', null, array(
			'class'       => 'uk-form-width-large',
			'placeholder' => 'Masukkan Nama Belakang...',
			'id'          => 'last_name',
			'maxlength'   => '50'
		)) 
	}}
	{{ $errors->first('last_name', 'Nama Belakang harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('email') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'Email') }}
	{{ Form::text('email', null, array(
			'class'       => 'uk-form-width-large',
			'placeholder' => 'Masukkan Email...',
			'id'          => 'email',
			'maxlength'   => '50'
		)) 
	}}
	{{ $errors->first('email', 'Email harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('password') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'Password') }}
	{{ Form::text('password', null, array(
			'class'       => 'uk-form-width-large',
			'placeholder' => 'Masukkan password...',
			'id'          => 'password',
			'maxlength'   => '50'
		)) 
	}}
	{{ $errors->first('password', 'Password harus diisi') }}
</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::labelUk('kd_agama', 'Kode Agama') }}
    {{ Form::select('kd_agama', array(''=>'')+Agama::lists('nama','id'), null, array(
                        'id'=>'kd_agama',
                        'placeholder' => "Pilih Agama")) }}
</div>
<div class="uk-form-row">
    {{ Form::labelUk('kd_jab', 'Kode Jabatan') }}
    {{ Form::select('kd_jab', array(''=>'')+Jabatan::lists('nama_jabatan','id'), null, array(
                        'id'=>'kd_jab',
                        'placeholder' => "Pilih Jabatan")) }}
</div>	
<div class="uk-form-row">
    {{ Form::labelUk('kd_gol', 'Kode Golongan') }}
    {{ Form::select('kd_gol', array(''=>'')+Golongan::lists('gol_pok','id'), null, array(
                        'id'=>'kd_gol',
                        'placeholder' => "Pilih Golongan")) }}
</div>
<div class="uk-form-row">
    {{ Form::labelUk('kd_statuskawin', 'Kode Status Pernikahan') }}
    {{ Form::select('kd_statuskawin', array(''=>'')+Ptkp::lists('kd_statuskawin','id'), null, array(
                        'id'=>'kd_statuskawin',
                        'placeholder' => "Pilih Status Pernikahan")) }}
</div>
<div class="uk-form-row">
{{ Form::labelUk('title', 'Kode Karyawan') }}
<input type="text" class="uk-form-width-medium" name="kd_karyawan" value="KR00<?php echo date('y')?>-<?php echo date('m-d')?>-<?php echo date('h-i')?>" disabled>
</div>
<div class="uk-form-row {{ ($errors->has('nik') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'NIK') }}
	{{ Form::text('nik', null, array(
			'class'       => 'uk-form-width-medium',
			'placeholder' => 'Masukkan nik...',
			'id'          => 'nik',
			'maxlength'   => '50'
		
		)) 
	}}
	{{ $errors->first('nik', 'NIK boleh kosong') }}
</div>
<div class="uk-form-row">
	{{ Form::labelUk('title', 'Jenis Kelamin') }}
	{{ Form::radio('jen_kel', 'men', true) }} Men
	{{ Form::radio('jen_kel', 'women', false) }} Women
</div>
<div class="uk-form-row {{ ($errors->has('tempat_lahir') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'Tempat Lahir') }}
	{{ Form::text('tempat_lahir', null, array(
			'class'       => 'uk-form-width-medium',
			'placeholder' => 'Masukkan Tempat Lahir...',
			'id'          => 'tempat_lahir',
			'maxlength'   => '50'
		
		)) 
	}}
	{{ $errors->first('tempat_lahir', 'Tempat Lahir harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('tgl_lahir') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'Tanggal Lahir') }}
	 <input class="uk-form-width-medium" type="text" name="tanggal_masuk" data-uk-datepicker="{format:'YYYY-MM-DD'}">
	{{ $errors->first('tanggal_masuk', 'Tanggal masuk harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('pendidikan') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'Pendidikan') }}
	 <input class="uk-form-width-large" type="text" name="pendidikan">
	{{ $errors->first('pendidikan', 'Pendidikan masuk harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('alamat') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'Alamat') }}
	 <input class="uk-form-width-large" type="text" name="alamat">
	{{ $errors->first('alamat', 'alamat masuk harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('desa') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'Desa') }}
	 <input class="uk-form-width-large" type="text" name="desa">
	{{ $errors->first('desa', 'desa masuk harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('kota') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'Kota') }}
	 <input class="uk-form-width-large" type="text" name="kota">
	{{ $errors->first('kota', 'kota masuk harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('propinsi') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'Propinsi') }}
	 <input class="uk-form-width-large" type="text" name="propinsi">
	{{ $errors->first('propinsi', 'propinsi masuk harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('kode_pos') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'Kode Pos') }}
	 <input class="uk-form-width-large" type="text" name="kode_pos">
	{{ $errors->first('kode_pos', 'Kode Pos masuk harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('no_telephone') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'No. Telephone') }}
	 <input class="uk-form-width-large" type="text" name="no_telephone">
	{{ $errors->first('no_telephone', 'No. Telephone masuk harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('no_handphone') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'No. Handphone') }}
	 <input class="uk-form-width-large" type="text" name="no_handphone">
	{{ $errors->first('no_handphone', 'No. Handphone masuk harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('npwp') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'NPWP') }}
	 <input class="uk-form-width-large" type="text" name="npwp">
	{{ $errors->first('npwp', 'NPWP masuk harus diisi') }}
</div>
<div class="uk-form-row {{ ($errors->has('foto') ? 'has-error' : '') }}">
	{{ Form::labelUk('title', 'Foto') }}
	 <input class="uk-form-file" type="file" name="foto">
	{{ $errors->first('foto', 'foto masuk harus diisi') }}
</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
<script>
$(document).ready(function() { $("#kd_agama").select2(); });
</script>.
<script>
$(document).ready(function() { $("#kd_gol").select2(); });
</script>
<script>
$(document).ready(function() { $("#kd_jab").select2(); });
</script>
<script>
$(document).ready(function() { $("#kd_statuskawin").select2(); });
</script>
@stop