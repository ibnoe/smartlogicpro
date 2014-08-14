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
        <h2 class="uk-panel-title">User Module</h2>
        <a href="{{ route('administrator.usermodules.create') }}" class="uk-button uk-button-small" title="Edit">User's Module</a> 

        <table class="uk-table uk-table-striped">
        <thead>
            <tr>
                <th>Nama Owner</th>
                <th>Perusahaan</th>
                <th width="15%"><center>Action</center></th>
            </tr>
        </thead>
            <tbody>
                @foreach($data as $value)
                <tr>
                	<td>{{{ $value->first_name }}} {{{ $value->last_name }}}</td>
                	<td>{{{ $value->nama_perusahaan }}}</td>                    	
                    <td> <center>
                	  <div class="uk-button-group">
                        <button class="uk-button uk-button-primary">Action</button>
                        <div data-uk-dropdown="{mode:'click'}" class="">
                            <a href="#" class="uk-button uk-button-primary"><i class="uk-icon-caret-down"></i></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav uk-nav-dropdown">
                                    <li><center><a href="{{ route('administrator.usermodules.addownermodules', array($value->id)) }}" title="Edit">Add Module</center></a></li>
                                    
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