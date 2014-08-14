@extends('layouts.master')


@section('content')

     {{ Form::model($modulegroup, array('url' => route('administrator.modulegroups.update', ['modulegroups'=>$modulegroup->id]),  'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Nama Group') }}
	    {{ Form::text('nama_grup_module', $modulegroup->nama_grup_module, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan Nama Grup Module...',
				'id'          => 'nama_grup_module',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode Group') }}
	    {{ Form::text('kd_grup', $modulegroup->kd_grup, array(
				'class'       => 'uk-form-width-large',
				'placeholder' => 'Masukkan Kode Group...',
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