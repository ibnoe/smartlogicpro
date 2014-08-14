@extends('layouts.master')



@section('asset')
    @include('layouts.partials.select2')
@stop


@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('administrator.modules.index') }}">Module</a></li>

@stop

@section('content')
    {{ Form::open(array('url' => route('administrator.modules.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ', 'files'=> 'true', 'method' => 'post')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Module') }}
	    {{ Form::text('nama_modul', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan nama module...',
				'id'          => 'nama_modul',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	
	<div class="uk-form-row">
    {{ Form::labelUk('title', 'Module Group') }}
    {{ Form::select('id_kelompokmodule', array(''=>'')+ModuleGroup::lists('nama_grup_module','id'), null, array(
				'placeholder' => 'Masukkan url module...',
				'id'          => 'id_kelompokmodule',

    )) }}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'URL Module') }}
	    {{ Form::text('url_module', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan url module...',
				'id'          => 'url_module',
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Status Module') }}
	    {{ Form::radio('status_module', 'active', true) }} Active
	    {{ Form::radio('status_module', 'inactive', false) }} Inactive
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'URL Module') }}
	    {{ Form::file('icon_module', null, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan icon module...',
				'id'          => 'icon_module',
			)) 
		}}
	</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Simpan') }}
</div>
<script>
$(document).ready(function() { $("#id_kelompokmodule").select2(); });
</script>
    {{ Form::close() }}
@stop