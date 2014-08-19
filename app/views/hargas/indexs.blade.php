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
            <h2 class="uk-panel-title">Daftar Harga</h2>
            <a href="{{ route('administrator.hargas.create') }}" class="uk-button uk-button-small" title="Edit">Buat Harga Baru</a> 

            <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>Kode Harga</th>
                    <th>Nama Harga</th>
                    <th>Harga</th>
                    <th width="10%"><center>Action</center></th>
                </tr>
            </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                    	<td>{{{ $value->kd_harga }}}</td>
                    	<td>{{{ $value->nama_harga }}}</td>
                    	<td>Rp. {{{ number_format(($value->harga), 2,',','.') }}}</td>    
                          <td> 
                          <div class="uk-button-group">
                            <button class="uk-button uk-button-primary">Action</button>
                            <div data-uk-dropdown="{mode:'click'}" class="">
                                <a href="#" class="uk-button uk-button-primary"><i class="uk-icon-caret-down"></i></a>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav uk-nav-dropdown">
                                        <li><center><a href="{{ route('administrator.hargas.edit', array($value->id)) }}" title="Edit">Edit</center></a></li>
                                        <li><center>
                                        {{ Form::open(array('url' => route('administrator.hargas.destroy', ['hargas'=>$value->id]), 'method'=>'delete')) }}
                                        {{ Form::submit('Delete', array('class' => 'uk-button-link')) }}
                                        {{ Form::close() }}
                                        </center></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </td>                   	
                    </tr>
                </tbody>
                @endforeach
            </table>

        </div>
    </div>
</div>
@stop