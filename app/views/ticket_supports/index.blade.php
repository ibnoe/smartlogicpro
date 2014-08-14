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
            <h2 class="uk-panel-title">Support Tickets</h2>
            <a href="{{ route('marketing.ticket_supports.create') }}" class="uk-button uk-button-small" title="Edit">Create New Tickets</a> 

            <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>Kode Marketing</th>
                    <th>Jenis Ticket</th>
                    <th>Status Ticket</th>
                    <th width="25%">Action</th>
                </tr>
            </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                    	<td>{{{ $value->kd_marketing }}}</td>
                    	<td>{{{ $value->jenis_ticket }}}</td>
                    	<td>{{{ $value->status_ticket }}}</td>
                        <center><td>
                    	<a href="{{ route('marketing.ticket_supports.show', array($value->id)) }}" class="uk-button uk-button-small" title="Edit">Detail</a> | 
                    	<a href="{{ route('marketing.ticket_supports.edit', array($value->id)) }}" class="uk-button uk-button-small" title="Edit">Edit</a> | 
                    	{{ Form::open(array('url' => route('marketing.ticket_supports.destroy', ['ticketsupports'=>$value->id]), 'method'=>'delete', 'class'=>'uk-display-inline')) }}
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