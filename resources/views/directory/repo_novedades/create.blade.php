@extends('layouts.master')

@section('content')

    <h1>Create New Repo_novedade</h1>
    <hr/>

    {!! Form::open(['url' => 'repo_novedades', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('custodio_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('custodio_id', 'Custodio Id: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::number('custodio_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('custodio_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('correo') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('correo', 'Correo: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('correo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('correo', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_novedades') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('fecha_novedades', 'Fecha Novedades: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::date('fecha_novedades', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_novedades', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('novedad') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('novedad', 'Novedad: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('novedad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('novedad', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('observaciones') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('observaciones', 'Observaciones: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('observaciones', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('observaciones', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('antiguo_custodio_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('antiguo_custodio_id', 'Antiguo Custodio Id: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::number('antiguo_custodio_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('antiguo_custodio_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('traslado_custodio_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('traslado_custodio_id', 'Traslado Custodio Id: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::number('traslado_custodio_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('traslado_custodio_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estado') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('estado', 'Estado: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estado', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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

@endsection