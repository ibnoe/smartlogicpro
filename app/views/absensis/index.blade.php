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
            <a href="{{ route('administrator.absensis.create') }}" class="uk-button uk-button-small" title="Absensi">Tambah Absensi</a> 

            <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>Nama Karyawan</th>
                    <th>Tanggal Absen</th>
                    <th>Cuti</th>
                    <th>Ijin</th>
                    <th>Sakit</th>
                    <th>Alpha</th>
                    <th width="10%"><center>Action</center></th>
                </tr>
            </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                    	<td>{{{ $value->first_name }}} {{{ $value->last_name }}}</td>
                    	<td>{{{ $value->tanggal }}}</td>                    	
                    	<td>{{{ $value->cuti }}}</td>                    	
                    	<td>{{{ $value->ijin }}}</td>                    	
                    	<td>{{{ $value->sakit }}}</td>                    	
                    	<td>{{{ $value->alpha }}}</td>                    	
                        <td> 
                          <div class="uk-button-group">
                            <button class="uk-button uk-button-primary">Action</button>
                            <div data-uk-dropdown="{mode:'click'}" class="">
                                <a href="#" class="uk-button uk-button-primary"><i class="uk-icon-caret-down"></i></a>
						<div class="uk-dropdown uk-dropdown-small">
							<ul class="uk-nav uk-nav-dropdown">
								<li><center><a href="{{ route('administrator.absensis.edit', array($value->id)) }}" title="Edit">Edit</center></a></li>
								<li><center>
									{{ Form::open(array('url' => route('administrator.absensis.destroy', ['absensis'=>$value->id]), 'method'=>'delete', 'class'=>'uk-display-inline')) }}
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