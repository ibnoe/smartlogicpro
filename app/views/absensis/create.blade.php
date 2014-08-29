@extends('layouts.master')

@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('administrator.agamas.index') }}">Agama</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('administrator.absensis.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}
	<input type="hidden" name="kd_absen" value="ABS<?php echo date('y')?>-<?php echo date('d-m')?>-<?php echo date('i')?>">
	
	<div class="uk-form-row">
    {{ Form::labelUk('title', 'Nama Karyawan') }}
    {{ Form::select('uid_karyawan', $data , null, 
	array(
	'id' => 'uid_karyawan', 
	'placeholder' => 'Masukkan url module...',
	))}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Cuti') }}
	    {{ Form::radio('cuti', 'active', true) }} Yes
	    {{ Form::radio('cuti', 'inactive', false) }} No
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Ijin') }}
	    {{ Form::radio('ijin', 'active', true) }} Yes
	    {{ Form::radio('ijin', 'inactive', false) }} No
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Sakit') }}
	    {{ Form::radio('sakit', 'active', true) }} Yes
	    {{ Form::radio('sakit', 'inactive', false) }} No
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Alpha') }}
	    {{ Form::radio('alpha', 'active', true) }} Yes
	    {{ Form::radio('alpha', 'inactive', false) }} No
	</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>

    {{ Form::close() }}
	<script>
$(document).ready(function() { $("#uid_karyawan").select2(); });
</script>.
@stop