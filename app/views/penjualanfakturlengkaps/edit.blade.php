@extends('layouts.master')


@section('content')

     {{ Form::model($penjualanfakturlengkap, array('url' => route('karyawan.penjualanfakturlengkaps.update', ['penjualanfakturlengkaps'=>$penjualanfakturlengkap->id]),  'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Pembeli') }}
	    {{ Form::text('nama_pembeli', $penjualanfakturlengkap->nama_pembeli, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan nama pembeli...',
				'id'          => 'nama_pembeli',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	
	
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Npwp') }}
	    {{ Form::text('npwp', $penjualanfakturlengkap->npwp, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan Npwp...',
				'id'          => 'npwp',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'no_faktur') }}
	    {{ Form::text('no_faktur', $penjualanfakturlengkap->no_faktur, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan no faktur...',
				'id'          => 'no_faktur',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	
	
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'penjualan') }}
	    {{ Form::text('penjualan', $penjualanfakturlengkap->penjualan, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan nilai penjualan...',
				'id'          => 'penjualan',
				'maxlength'   => '50'
			)) 
		}}
	</div>	
	
	
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'ppn') }}
	    {{ Form::text('ppn', $penjualanfakturlengkap->ppn, array(
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