@extends('layouts.master')


@section('content')

     {{ Form::model($pembelianimport, array('url' => route('karyawan.pembelianimports.update', ['pembelianimports'=>$pembelianimport->id]),  'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Pembeli') }}
	    {{ Form::text('nama_pembeli', $pembelianimport->nama_pembeli, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan nama pembeli...',
				'id'          => 'nama_pembeli',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	

	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'no_ekspor') }}
	    {{ Form::text('no_ekspor', $pembelianimport->no_ekspor, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan no ekspor...',
				'id'          => 'no_ekspor',
				'maxlength'   => '50'
			)) 
		}}
	</div>	
	
	
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'penjualan') }}
	    {{ Form::text('penjualan', $pembelianimport->penjualan, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan nilai penjualan...',
				'id'          => 'penjualan',
				'maxlength'   => '50'
			)) 
		}}
	</div>	
	
	
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'ppn') }}
	    {{ Form::text('ppn', $pembelianimport->ppn, array(
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