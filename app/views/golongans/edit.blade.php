@extends('layouts.master')

@section('content')

     {{ Form::model($golongan, array('url' => route('administrator.golongans.update', ['golongans'=>$golongan->id]),  'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Golongan') }}
	    {{ Form::text('kd_gol', $golongan->kd_gol, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode golongan...',
				'id'          => 'kd_gol',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Golongan Pokok') }}
	    {{ Form::text('gol_pok', $golongan->gol_pok, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan nama golongan pokok...',
				'id'          => 'gol_pok',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Tunjangan Jabatan') }}
	    {{ Form::text('tun_jab', $golongan->tun_jab, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan banyak harga tunjangan jabatan...',
				'id'          => 'tun_jab',
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