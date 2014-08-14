@extends('layouts.master')

@section('asset')
    @include('layouts.partials.datatable')
@stop

@section('title')
    {{ $title }}
@stop



@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <a href="{{ route('marketing.ticket_supports.create') }}" class="uk-button uk-button-small" title="Edit">Create New Tickets</a> 
@stop

@section('content')

        
@if (Sentry::getUser()->hasPermission('marketing'))

    {{ Datatable::table()
    ->addColumn('kd_marketing','kd_agenda','nama_agenda','keterangan', '')       // these are the column headings to be shown
    ->setOptions('aoColumnDefs',array(
        array(
            'bVisible' => false,
            'aTargets' => [0]),
        array(
            'sTitle' => 'Kode Marketing',
            'aTargets' => [1]),
        array(
            'sTitle' => 'Kode Agenda',
            'aTargets' => [2]),
        array(
            'sTitle' => 'nama Agenda',
            'aTargets' => [3]),
        array(
            'bSortable' => false,
            'aTargets' => [4])
        ))
    ->setOptions('bProcessing', true)
    ->setUrl(route('marketing.agendas.index'))   // this is the route where data will be retrieved
    ->render('datatable.uikit') }}
@endif
@if (Sentry::getUser()->hasPermission('admin'))
    {{ Datatable::table()
    ->addColumn('kd_marketing','kd_agenda','nama_agenda','keterangan', '')       // these are the column headings to be shown
    ->setOptions('aoColumnDefs',array(
        array(
            'bVisible' => false,
            'aTargets' => [0]),
        array(
            'sTitle' => 'Kode Marketing',
            'aTargets' => [1]),
        array(
            'sTitle' => 'Kode Agenda',
            'aTargets' => [2]),
        array(
            'sTitle' => 'nama Agenda',
            'aTargets' => [3]),
        array(
            'bSortable' => false,
            'aTargets' => [4])
        ))
    ->setOptions('bProcessing', true)
    ->setUrl(route('administrator.agendas.index'))   // this is the route where data will be retrieved
    ->render('datatable.uikit') }}
@endif
@stop