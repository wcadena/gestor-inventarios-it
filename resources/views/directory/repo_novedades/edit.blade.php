@extends('layouts.master')

@section('content')

    <h1>Edit Repo_novedade</h1>
    <hr/>

    {!! Form::model($repo_novedade, [
        'method' => 'PATCH',
        'url' => ['repo_novedades', $repo_novedade->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('custodio_id') ? 'has-error' : ''}}">
                {!! Form::label('custodio_id', 'Custodio Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('custodio_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('custodio_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('correo') ? 'has-error' : ''}}">
                {!! Form::label('correo', 'Correo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('correo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('correo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_novedades') ? 'has-error' : ''}}">
                {!! Form::label('fecha_novedades', 'Fecha Novedades: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_novedades', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_novedades', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('novedad') ? 'has-error' : ''}}">
                {!! Form::label('novedad', 'Novedad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('novedad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('novedad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('observaciones') ? 'has-error' : ''}}">
                {!! Form::label('observaciones', 'Observaciones: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('observaciones', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('observaciones', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('antiguo_custodio_id') ? 'has-error' : ''}}">
                {!! Form::label('antiguo_custodio_id', 'Antiguo Custodio Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('antiguo_custodio_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('antiguo_custodio_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('traslado_custodio_id') ? 'has-error' : ''}}">
                {!! Form::label('traslado_custodio_id', 'Traslado Custodio Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('traslado_custodio_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('traslado_custodio_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                {!! Form::label('estado', 'Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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