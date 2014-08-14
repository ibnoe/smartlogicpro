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
            <h2 class="uk-panel-title">Penjualan</h2>
			<hr>
				<a href="{{ route('karyawan.penjualanfakturlengkaps.index') }}"><img src="{{ asset('foto/faktur lengkap shadow.png') }}" align="absmiddle" width=180 height=40></a> 
				<a href="{{ route('karyawan.tanpafakturlengkaps.index') }}"><img src="{{ asset('foto/tanpa faktur lengkap shadow.png') }}" align="absmiddle" width=228 height=40></a>
				<a href="{{ route('karyawan.penjualaneksports.index') }}"><img src="{{ asset('foto/penjualan export shadow.png') }}" align="absmiddle" width=180 height=40></a>					

			<table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th class="trbg2" width="5%">Omset</th> 
                    <th  class="trbg" width="20%">Rp. {{ number_format($omset,2) }}</th>
                </tr>
            </thead>
            </table>

		 

        </div>
    </div>
</div>
@stop