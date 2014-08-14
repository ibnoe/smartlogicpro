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
            <h2 class="uk-panel-title">Penjualan Tanpa Faktur Lengkap</h2>
			<hr>
				<a href="{{ route('karyawan.penjualanfakturlengkaps.index') }}"><img src="{{ asset('foto/faktur lengkap shadow.png') }}" align="absmiddle" width=180 height=40></a> 
				<a href="{{ route('karyawan.tanpafakturlengkaps.index') }}"><img src="{{ asset('foto/tanpa faktur lengkap shadow.png') }}" align="absmiddle" width=228 height=40></a>
				<a href="{{ route('karyawan.penjualaneksports.index') }}"><img src="{{ asset('foto/penjualan export shadow.png') }}" align="absmiddle" width=180 height=40></a>	
				
				
			<br><br>			
			
			
			
			
            <a href="{{ route('karyawan.tanpafakturlengkaps.create') }}" class="uk-button uk-button-small" title="Edit">New Data Penjualan Tanpa Faktur Lengkap</a> 

            <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>Nama Pembeli</th>
					<th>No Faktur</th>
					<th>Penjualan</th>
					<th>Ppn</th>
                    <th width="20%"><center>Action</center></th>
                </tr>
            </thead>
                <tbody>
                    @foreach($datatanpafaktur as $value)
                    <tr>
                    	<td>{{{ $value->nama_pembeli }}}</td>                    	                   	
                    	<td>{{{ $value->no_faktur }}}</td>                    	
                    	<td>{{{ $value->penjualan }}}</td>                    	
                    	<td>{{{ $value->ppn }}}</td>                    	

                        <center><td> 
                    	<a href="{{ route('karyawan.tanpafakturlengkaps.edit', array($value->id)) }}" class="uk-button uk-button-small" title="Edit">Edit</a> | 
                    	{{ Form::open(array('url' => route('karyawan.tanpafakturlengkaps.destroy', ['tanpafakturlengkaps'=>$value->id]), 'method'=>'delete', 'class'=>'uk-display-inline')) }}
						{{ Form::submit('delete', array('class' => 'uk-button uk-button-small')) }}
						{{ Form::close() }}
                        </td></center>
                    </tr>
                </tbody>
                @endforeach
            </table>
			
			
			<table class="uk-table uk-table-striped">
            <thead>
				<tr>
					<td></td>
					<td></td>
					<th class="trbg2">Penjualan</th>
					<th class="trbg">Ppn</th>
				</tr>
                <tr>
					<td class="trwrapper"></td>
					<th class="trwrapper" width="30%">Jumlah</th>
                    <th class="trbg2" width="25%">Rp. {{ number_format($totalpenjualantanpalengkap,2) }}</th>
                    <th class="trbg" width="20%">Rp. {{ number_format($totalppntanpalengkap,2) }}</th>
					<th class="trbg" width="30%">Rp. {{ number_format($totalomsettanpalengkap) }}</th>
					<th class="" width="45%"> Rp. {{ number_format($totalgaji) }}</th>
                </tr>
            </thead>
            </table>			
			

        </div>
    </div>
</div>
@stop