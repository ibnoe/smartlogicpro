@extends('layouts.master')

@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('administrator.golongans.index') }}">Golongan</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('administrator.golongans.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row {{ ($errors->has('kd_gol') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Kode Golongan') }}
	    {{ Form::text('kd_gol', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode golongan...',
				'id'          => 'kd_gol',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('kd_gol', 'Kode Golongan harus kurang dari 10 karakter') }}
	</div>
	<div class="uk-form-row {{ ($errors->has('gol_pok') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Golongan Pokok') }}
	    {{ Form::text('gol_pok', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan nama golongan pokok...',
				'id'          => 'gol_pok',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('gol_pok', 'Nama Golongan Pokok harus kurang dari 50 karakter') }}
	</div>
	<div class="uk-form-row {{ ($errors->has('tun_jab') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Tunjangan Jabatan') }}
	    {{ Form::text('tun_jab', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan banyak harga tunjangan jabatan...',
				'id'          => 'tun_jab',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('tun_jab', 'Banyak harga tunjangan jabatan harus angka') }}
	</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
@stop