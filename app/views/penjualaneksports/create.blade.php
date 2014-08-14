@extends('layouts.master')

@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('karyawan.pembelianimports.index') }}">Penjualan Ekspor</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('karyawan.penjualaneksports.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row {{ ($errors->has('nama_pembeli') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Nama Pembeli') }}
	    {{ Form::text('nama_pembeli', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan Nama Pembeli...',
				'id'          => 'nama_pembeli',
				'maxlength'   => '50'
			)) 
		}}
		{{ $errors->first('nama_pembeli', 'Nama Pembeli harus lengkap') }}
	</div>
	

	
	<div class="uk-form-row {{ ($errors->has('no_ekspor') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'No Ekspor') }}
	    {{ Form::text('no_ekspor', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan no ekspor...',
				'id'          => 'no_ekspor',
				'maxlength'   => '25'
			)) 
		}}
		{{ $errors->first('no_faktur', 'Npwp harus kurang dari 25 karakter') }}
	</div>	
	
	
	<div class="uk-form-row {{ ($errors->has('penjualan') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'penjualan') }}
	    {{ Form::text('penjualan', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan penjualan...',
				'id'          => 'penjualan',
				'maxlength'   => '25'
			)) 
		}}
		{{ $errors->first('penjualan', 'Npwp harus kurang dari 25 karakter') }}
	</div>	




	
	
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
@stop