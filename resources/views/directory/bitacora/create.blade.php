@extends('layouts.backend')

@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
@endsection

@section('contentheader_aqui', 'Bitacoras')

@section('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">@lang('form.kijhuu7y')</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Bitacoras</li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title">Bitacoras</h3>
            </div>
            <div class="block-content">

                {!! Form::open(['url' => 'bitacora', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('titulo') ? ' form-control-alt is-invalid' : ''}}">
                    {!! Form::label('titulo', 'Título: ', ['class' => 'control-label']) !!}
                    <div class="ekihk">
                        {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('titulo', '<p class="invalid-feedback">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('fecha_ingreso') ? ' form-control-alt is-invalid' : ''}}">
                    {!! Form::label('fecha_ingreso', 'Fecha Ingreso: ', ['class' => 'control-label']) !!}
                    <div class="ekihk">
                        {!! Form::text('fecha_ingreso', null, ['class' => 'js-datepicker form-control','id'=>'fecha_ingreso']) !!}
                        {!! $errors->first('fecha_ingreso', '<p class="invalid-feedback">:message</p>') !!}
                    </div>
                </div>
                {!! Form::hidden('id_equipos', $equipo_id, ['class' => 'form-control']) !!}
                <div class="form-group {{ $errors->has('custodio_id') ? ' form-control-alt is-invalid' : ''}}">
                    {!! Form::label('custodio_id', 'Custodio: ', ['class' => 'control-label']) !!}
                    <div class="ekihk">
                        {!! Form::select('custodio_id', $dtos['custodio'], $custodio_id, ['class' => 'form-control']) !!}
                        {!! $errors->first('custodio_id', '<p class="invalid-feedback">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('user_id') ? ' form-control-alt is-invalid' : ''}}">
                    {!! Form::label('user_id', 'Usuario: ', ['class' => 'control-label']) !!}
                    <div class="ekihk">
                        {!! Form::select('user_id', $dtos['usuario'], $user_id, ['class' => 'form-control']) !!}
                        {!! $errors->first('user_id', '<p class="invalid-feedback">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('problema') ? ' form-control-alt is-invalid' : ''}}">
                    {!! Form::label('problema', 'Problema: ', ['class' => 'control-label']) !!}
                    <div class="ekihk">
                        {!! Form::textarea('problema', null, ['class' => 'form-control ckeditor']) !!}
                        {!! $errors->first('problema', '<p class="invalid-feedback">:message</p>') !!}
                    </div>
                </div>
                {!! Form::hidden('solucion', null, ['class' => 'form-control']) !!}
                <div class="form-group {{ $errors->has('estado') ? ' form-control-alt is-invalid' : ''}}">
                    {!! Form::label('estado', 'Estado: ', ['class' => 'control-label']) !!}
                    <div class="ekihk">
                        {!! Form::select('estado', \App\Bitacora::getENUM('estado'), null, ['class' => 'form-control']) !!}
                        {!! $errors->first('estado', '<p class="invalid-feedback">:message</p>') !!}
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        {!! Form::button(__('<i class="fa fa-fw fa-save mr-1"></i> Crear'), ['class' => 'btn btn-block btn-hero-primary','type' => 'submit']) !!}
                    </div>
                </div>
                {!! Form::close() !!}

                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('js_after')
    <!-- Page JS datepicker -->
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function(){ Dashmix.helpers('datepicker'); });</script>

@endsection