@extends('layouts.master')

@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('karyawan.pembeliandlmnegeris.index') }}">Pembelian dalam Negeri</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('karyawan.pembeliandlmnegeris.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
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
	
	
	<div class="uk-form-row {{ ($errors->has('npwp') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'Npwp') }}
	    {{ Form::text('npwp', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan npwp...',
				'id'          => 'npwp',
				'maxlength'   => '25'
			)) 
		}}
		{{ $errors->first('no_faktur', 'Npwp harus kurang dari 25 karakter') }}
	</div>	
	
	
	<div class="uk-form-row {{ ($errors->has('no_faktur') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'No Faktur') }}
	    {{ Form::text('no_faktur', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan no faktur...',
				'id'          => 'no_faktur',
				'maxlength'   => '25'
			)) 
		}}
		{{ $errors->first('no_faktur', 'No faktur harus kurang dari 25 karakter') }}
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
		{{ $errors->first('penjualan', 'Nilai Penjualan harus kurang dari 25 karakter') }}
	</div>	


	<div class="uk-form-row {{ ($errors->has('ppn') ? 'has-error' : '') }}">
	    {{ Form::labelUk('title', 'ppn') }}
	    {{ Form::text('ppn', null, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan ppn...',
				'id'          => 'ppn',
				'maxlength'   => '25'
			)) 
		}}
		{{ $errors->first('ppn', 'Ppn harus kurang dari 25 karakter') }}
	</div>	

	
	
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
	<input action="action" class="uk-button uk-button-primary" type="button" value="Back" onclick="history.go(-1);" />
</div>

    {{ Form::close() }}
@stop