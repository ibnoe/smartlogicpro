@extends('layouts.master')



@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('marketing.ticket_supports.index') }}">Buku</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('administrator.modulegroups.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Kelompok Module') }}
	    {{ Form::text('nama_grup_module', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan nama kelompok module...',
				'id'          => 'nama_grup_module',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Kelompok Module') }}
	    {{ Form::text('kd_grup', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan kode grup module...',
				'id'          => 'kd_grup',
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