@extends('layouts.master')

@section('asset')
    @include('layouts.partials.datatable')
@stop


@section('breadcrumb')
    <li><a href="/">Jabatan</a></li>
@stop

@section('content')
<div class="uk-grid" data-uk-grid-margin="">
    <div class="uk-width-medium-2-2">
        <div class="uk-panel">
            <h2 class="uk-panel-title">Jabatan</h2>
            <a href="{{ route('administrator.jabatans.create') }}" class="uk-button uk-button-small" title="Edit">Jabatan Baru</a> 

            <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>Kode Jabatan</th>
                    <th>Nama Jabatan</th>
                    <th>Tunjangan Kesehatan</th>
                    <th>Tunjangan Makan</th>
                    <th>Tunjangan Transport</th>
                    <th width="20%"><center>Action</center></th>
                </tr>
            </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                    	<td>{{{ $value->kd_jab }}}</td>
                    	<td>{{{ $value->nama_jabatan }}}</td>
                    	<td>{{{ $value->tun_kes }}}</td>
                    	<td>{{{ $value->tun_mkn }}}</td>
                    	<td>{{{ $value->tun_transport }}}</td>                    	
                        <center><td> 
                    	<a href="{{ route('administrator.jabatans.edit', array($value->id)) }}" class="uk-button uk-button-small" title="Edit">Edit</a> | 
                    	{{ Form::open(array('url' => route('administrator.jabatans.destroy', ['jabatans'=>$value->id]), 'method'=>'delete', 'class'=>'uk-display-inline')) }}
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