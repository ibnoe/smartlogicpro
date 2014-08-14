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
            <h2 class="uk-panel-title">PTKP</h2>
            <a href="{{ route('administrator.ptkps.create') }}" class="uk-button uk-button-small" title="Edit">Tambah PTKP</a> 
            <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>Kode Status</th>
                    <th>Jumlah PTKP</th>
                    <th>Status Kawin</th>
                    <th width="20%"><center>Action</center></th>
                </tr>
            </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                    	<td>{{{ $value->kd_statuskawin }}}</td>
                    	<td>{{{ $value->jumlah_ptkp }}}</td>
                    	<td>{{{ $value->status_kawin }}}</td>                     	
                        <center><td> 
                    	<a href="{{ route('administrator.ptkps.edit', array($value->id)) }}" class="uk-button uk-button-small" title="Edit">Edit</a> | 
                    	{{ Form::open(array('url' => route('administrator.ptkps.destroy', ['ptkps'=>$value->id]), 'method'=>'delete', 'class'=>'uk-display-inline')) }}
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