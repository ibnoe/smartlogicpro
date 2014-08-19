@extends('layouts.master')


@section('content')

     {{ Form::model($pkp, array('url' => route('administrator.pkps.update', ['pkps'=>$pkp->id]),  'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Kode PKP') }}
	    {{ Form::text('kode_pkp', $pkp->kode_pkp, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan kode PKP...',
				'id'          => 'kode_pkp',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Batas PKP') }}
	    {{ Form::text('batas_pkp', $pkp->batas_pkp, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan nama agama...',
				'id'          => 'batas_pkp',
				'maxlength'   => '50'
			)) 
		}}
	</div>
	<div class="uk-form-row">
	    {{ Form::labelUk('title', 'Tarif PKP') }}
	    {{ Form::text('tarif', $pkp->tarif, array(
				'class'       => 'uk-form-width-medium',
				'placeholder' => 'Masukkan Tarif PKP...',
				'id'          => 'tarif',
				'maxlength'   => '50'
			)) 
		}}
	</div>
{{ HTML::divider() }}
<div class="uk-form-row">
    {{ Form::submitUk('Update') }}
</div>

    {{ Form::close() }}
@stop