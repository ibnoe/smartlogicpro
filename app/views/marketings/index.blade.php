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
            <h2 class="uk-panel-title">Data Marketing</h2>
            <a href="{{ route('administrator.marketings.create') }}" class="uk-button uk-button-small" title="Edit">Data Marketing Baru</a> 

            <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Kota</th>
                    <th width="10%"><center>Action</center></th>
                </tr>
            </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                    	<td>{{{ $value->first_name }}} {{{ $value->last_name }}}</td>
                    	<td>{{{ $value->alamat }}}</td>
                    	<td>{{{ $value->email }}}</td>
                    	<td>{{{ $value->no_hp }}}</td>
                    	<td>{{{ $value->kota }}}</td> 
                        <td> <center>
                    	  <div class="uk-button-group">
                            <button class="uk-button uk-button-primary">Action</button>
                            <div data-uk-dropdown="{mode:'click'}" class="">
                                <a href="#" class="uk-button uk-button-primary"><i class="uk-icon-caret-down"></i></a>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav uk-nav-dropdown">
                                    	<li><center><a href="{{ route('administrator.marketings.show', array($value->id)) }}" title="Edit">Detail</center></a></li>
                                        <li><center><a href="{{ route('administrator.marketings.edit', array($value->id)) }}" title="Edit">Edit Profile</center></a></li>
                                        <li><center>{{ Form::open(array('url' => route('administrator.marketings.destroy', ['marketings'=>$value->id]), 'method'=>'delete')) }}
                                        {{ Form::submit('Delete', array('class' => 'uk-button-link')) }} 
                                        {{ Form::close() }}</center></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </center></td>
                    </tr>
                </tbody>
                @endforeach
            </table>

        </div>
    </div>
</div>
@stop