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
            <h2 class="uk-panel-title">Perusahaan</h2>
            <a href="{{ route('administrator.perusahaans.create') }}" class="uk-button uk-button-small" title="Edit">Daftar Perusahaan Baru</a> 

            <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>Kode Perusahaan</th>
                    <th>Nama Perusahaan</th>
                    <th>Alamat Perusahaan</th>
                    <th width="20%"><center>Action</center></th>
                </tr>
            </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                    	<td>{{{ $value->kd_perusahaan }}}</td>
                    	<td>{{{ $value->nama_perusahaan }}}</td>
                    	<td>{{{ $value->alamat }}}</td>                         	
                        <center><td>
                        <a href="{{ route('administrator.perusahaans.show', array($value->id)) }}" class="uk-button uk-button-small" title="Edit">Detail</a> |  
                    	<a href="{{ route('administrator.perusahaans.edit', array($value->id)) }}" class="uk-button uk-button-small" title="Edit">Edit</a> | 
                    	{{ Form::open(array('url' => route('administrator.perusahaans.destroy', ['agamas'=>$value->id]), 'method'=>'delete', 'class'=>'uk-display-inline')) }}
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