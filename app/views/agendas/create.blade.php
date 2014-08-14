@extends('layouts.master')



@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('marketing.ticket_supports.index') }}">Buku</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('marketing.agendas.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Marketing') }}
	    {{ Form::text('kd_marketing', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan kode marketing...',
				'id'          => 'kd_marketing',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Agenda') }}
	    {{ Form::text('kd_agenda', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan kode agenda...',
				'id'          => 'kd_agenda',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Agenda') }}
	    {{ Form::text('nama_agenda', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan nama agenda...',
				'id'          => 'nama_agenda',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Keterangan') }}
	    {{ Form::textarea('keterangan', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan keterangan...',
				'id'          => 'keterangan',
			)) 
		}}
	</div>

	<!--<div class="uk-form-row">
	    {{ Form::labelUk('author_id', 'Penulis') }}
	    {{ Form::select('author_id', array(''=>'')+Author::lists('name','id'), null, array(
	                        'id'=>'author_id',
	                        'placeholder' => "Pilih Penulis")) }}
	</div>
<div class="uk-form-row">
    {{ Form::labelUk('amount', 'Jumlah') }}
    {{ Form::textUk('amount', 'Jumlah Buku', 'uk-icon-unsorted') }}
</div>-->
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
@stop