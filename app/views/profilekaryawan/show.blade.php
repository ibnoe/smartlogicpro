@extends('layouts.master')

@section('title')
    {{ $title }}
@stop

@section('title-button')
    {{ link_to_route('member.profilekaryawan.edit', 'Perbaharui', null, array('class'=>'uk-button uk-button-primary')) }}
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li class="uk-active">{{ $title }}</li>
@stop

@section('content')

{{ link_to_route('member.profilekaryawan.edit', 'Perbaharui', null, array('class'=>'uk-button uk-button-primary')) }} 

    <table class="uk-table">
        <tbody>

            <tr>
                <td class="uk-text-muted">Nama</td>
                <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
            </tr>
            <tr>
                <td class="uk-text-muted">Email Karyawan</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td class="uk-text-muted">Login Terakhir</td>
                <td>{{ $user->last_login }}</td>
            </tr>
        </tbody>
    </table>
@stop