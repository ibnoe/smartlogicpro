@extends('layouts.master')


@section('content')

     {{ Form::model($jabatan, array('url' => route('administrator.jabatans.update', ['jabatans'=>$jabatan->id]),  'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Jabatan') }}
	    {{ Form::text('kd_jab', $jabatan->jd_jab, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode jabatan...',
				'id'          => 'kd_jab',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Jabatan') }}
	    {{ Form::text('nama_jabatan', $jabatan->nama_jabatan, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan nama jabatan...',
				'id'          => 'nama_jabatan',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Tunjangan Kesehatan') }}
	    {{ Form::text('tun_kes', $jabatan->tun_kes, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan banyak harga tunjangan kesehatan...',
				'id'          => 'tun_kes',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Tunjangan Makanan') }}
	    {{ Form::text('tun_mkn', $jabatan->tun_mkn, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan banyak harga tunjangan makanan...',
				'id'          => 'tun_mkn',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Tunjangan Transport') }}
	    {{ Form::text('tun_transport', $jabatan->tun_transport, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan banyak harga tunjangan transport...',
				'id'          => 'tun_transport',
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