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
            <h2 class="uk-panel-title">Pembelian</h2>
			<hr>
			
				<a href="{{ route('karyawan.pembelianimports.index') }}"><img src="{{ asset('foto/pembelian import shadow.png') }}" align="absmiddle" width=180 height=40></a> 
				<a href="{{ route('karyawan.pembeliandlmnegeris.index') }}"><img src="{{ asset('foto/pembelian dalam negeri shadow.png') }}" align="absmiddle" width=225 height=70></a>
				
			<table class="uk-table uk-table-striped">

            </table>

        </div>
    </div>
</div>
@stop