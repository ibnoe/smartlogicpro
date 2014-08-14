@extends('layouts.master')

@section('asset')
    @include('layouts.partials.datatable')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
@stop

@section('content')
<div class="uk-grid" data-uk-grid-margin="">
    <div class="uk-width-medium-2-2">
        <div class="uk-panel">
            <h2 class="uk-panel-title">Agama</h2>
            <a href="{{ route('administrator.agamas.create') }}" class="uk-button uk-button-small" title="Edit">New Agama</a> 

            <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>Kode Agama</th>
                    <th>Nama Agama</th>
                    <th width="20%"><center>Action</center></th>
                </tr>
            </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                    	<td>{{{ $value->kd_agama }}}</td>
                    	<td>{{{ $value->nama }}}</td>                    	
                        <center><td> 
                    	<a href="{{ route('administrator.agamas.edit', array($value->id)) }}" class="uk-button uk-button-small" title="Edit">Edit</a> | 
                    	{{ Form::open(array('url' => route('administrator.agamas.destroy', ['agamas'=>$value->id]), 'method'=>'delete', 'class'=>'uk-display-inline')) }}
						{{ Form::submit('delete', array('class' => 'uk-button uk-button-small')) }}
						{{ Form::close() }}
                        </td></center>
                    </tr>
                </tbody>
                @endforeach
            </table>

        </div>
    </div>
</div>
@stop