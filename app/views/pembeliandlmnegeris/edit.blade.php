@extends('layouts.master')


@section('content')

     {{ Form::model($pembeliandlmnegeri, array('url' => route('karyawan.pembeliandlmnegeris.update', ['pembeliandlmnegeris'=>$pembeliandlmnegeri->id]),  'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Pembeli') }}
	    {{ Form::text('nama_pembeli', $pembeliandlmnegeri->nama_pembeli, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan nama pembeli...',
				'id'          => 'nama_pembeli',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	

	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'npwp') }}
	    {{ Form::text('npwp', $pembeliandlmnegeri->npwp, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan npwp...',
				'id'          => 'npwp',
				'maxlength'   => '50'
			)) 
		}}
	</div>	
	
	
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'no_faktur') }}
	    {{ Form::text('no_faktur', $pembeliandlmnegeri->no_faktur, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan no faktur...',
				'id'          => 'no_faktur',
				'maxlength'   => '50'
			)) 
		}}
	</div>	
	
	
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'penjualan') }}
	    {{ Form::text('penjualan', $pembeliandlmnegeri->penjualan, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan nilai penjualan...',
				'id'          => 'penjualan',
				'maxlength'   => '50'
			)) 
		}}
	</div>	
	
	
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'ppn') }}
	    {{ Form::text('ppn', $pembeliandlmnegeri->ppn, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan nilai ppn...',
				'id'          => 'ppn',
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