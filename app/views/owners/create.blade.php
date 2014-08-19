@extends('layouts.master')

@section('asset')
    @include('layouts.partials.select2')
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('administrator.karyawans.index') }}">Tambah Karyawan baru</a></li>

@stop

@section('content')
@include('layouts.partials.validation')
{{ Form::open(array('url' => route('administrator.karyawans.store'), 'method' => 'post', 'class'=>'uk-form uk-form-horizontal ')) }}



            <div class="uk-form-row">
                {{ Form::label('first_name', 'Nama Depan', array('class' => 'uk-form-label uk-text-left')) }}
                {{ Form::textUk('first_name', 'Nama depan Anda') }}
            </div>

            <div class="uk-form-row">
                {{ Form::label('last_name', 'Nama Belakang', array('class' => 'uk-form-label uk-text-left')) }}
                {{ Form::textUk('last_name', 'Nama belakang Anda') }}
            </div>

            <div class="uk-form-row">
                {{ Form::label('email', 'Email', array('class' => 'uk-form-label uk-text-left')) }}
                {{ Form::textUk('email', 'emailmu@website.com') }}
            </div>

            <div class="uk-form-row">
                {{ Form::label('password', 'Password', array('class' => 'uk-form-label uk-text-left')) }}
                <div class="uk-form-controls">
                    {{ Form::password('password', array('placeholder'=>'*********')) }}
                </div>
            </div>

            <div class="uk-form-row">
                {{ Form::label('password_confirmation', 'Konfirmasi Password', array('class' => 'uk-form-label uk-text-left')) }}
                <div class="uk-form-controls">
                    {{ Form::password('password_confirmation', array('placeholder'=>'*********')) }}
                </div>
            </div>
            {{ HTML::divider() }}
            <div class="uk-form-row">
                {{ Form::label('kd_perusahaan', 'Kode Perusahaan', array('class' => 'uk-form-label uk-text-left')) }}
                {{ Form::textUk('kd_perusahaan', 'Kode Perusahaan Anda') }}
            </div>
            <div class="uk-form-row">
                {{ Form::label('kd_owner', 'Kode Owner Perusahaan', array('class' => 'uk-form-label uk-text-left')) }}
                {{ Form::textUk('kd_owner', 'Kode Owner Perusahaan Anda') }}
            </div>
            <div class="uk-form-row">
                {{ Form::label('handphone', 'No Handphone Perusahaan', array('class' => 'uk-form-label uk-text-left')) }}
                {{ Form::textUk('handphone', 'No Handphone Perusahaan Anda') }}
            </div>
            <div class="uk-form-row">
                {{ Form::label('npwp', 'NPWP Perusahaan', array('class' => 'uk-form-label uk-text-left')) }}
                {{ Form::textUk('npwp', 'NPWP Perusahaan Anda') }}
            </div>
            <div class="uk-form-row">
                {{ Form::label('alamat', 'Alamat Perusahaan', array('class' => 'uk-form-label uk-text-left')) }}
                {{ Form::textUk('alamat', 'Alamat Perusahaan Anda') }}
            </div>
            <div class="uk-form-row">
                {{ Form::label('kota', 'Kota', array('class' => 'uk-form-label uk-text-left')) }}
                {{ Form::textUk('kota', 'Kota') }}
            </div>
            <div class="uk-form-row">
                {{ Form::label('propinsi', 'Propinsi', array('class' => 'uk-form-label uk-text-left')) }}
                {{ Form::textUk('propinsi', 'Propinsi') }}
            </div>
            <div class="uk-form-row">
                {{ Form::label('kodepos', 'Kode Pos', array('class' => 'uk-form-label uk-text-left')) }}
                {{ Form::textUk('kodepos', 'Kode Pos') }}
            </div>
			{{ Form::hidden('uid', Str::random(20, 'numeric')) }}
            {{ Form::hidden('status', 'pending') }}
            {{ Form::hidden('tanggal_daftar', date('Y-m-d')) }}
            <div class="uk-form-row">
                {{ Form::captcha() }}
            </div>

            <div class="uk-form-row">
                {{ Form::submit('Daftar', array('class'=>'uk-width-1-1 uk-button uk-button-primary uk-button-large')) }}
            </div>
        {{ Form::close() }}
<script>
$(document).ready(function() { $("#kd_agama").select2(); });
</script>.
<script>
$(document).ready(function() { $("#kd_gol").select2(); });
</script>
<script>
$(document).ready(function() { $("#kd_jab").select2(); });
</script>
<script>
$(document).ready(function() { $("#kd_statuskawin").select2(); });
</script>
<script>
$(document).ready(function() { $("#uid_owner").select2(); });
</script>
@stop