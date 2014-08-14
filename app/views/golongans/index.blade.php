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
            <h2 class="uk-panel-title">Golongan</h2>
            <a href="{{ route('administrator.golongans.create') }}" class="uk-button uk-button-small" title="Edit">Tambah Golongan</a> 

            <table class="uk-table uk-table-striped">
			
            <thead>
                <tr>
                    <th>Kode Golongan</th>
                    <th>Golongan Pokok</th>
                    <th>Tunjangan Jabatan</th>
                    <th width="20%"><center>Action</center></th>
                </tr>
            </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                    	<td>{{{ $value->kd_gol }}}</td>
                    	<td>{{{ $value->gol_pok }}}</td>
                    	<td>{{{ $value->tun_jab }}}</td>                     	
                        <center><td> 
                    	<a href="{{ route('administrator.golongans.edit', array($value->id)) }}" class="uk-button uk-button-small" title="Edit">Edit</a> | 
                    	{{ Form::open(array('url' => route('administrator.golongans.destroy', ['golongans'=>$value->id]), 'method'=>'delete', 'class'=>'uk-display-inline')) }}
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