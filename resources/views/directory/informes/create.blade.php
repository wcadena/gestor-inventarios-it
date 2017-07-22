@extends('layouts.master')

@section('content')

    <h1>Create New Informe</h1>
    <hr/>

    {!! Form::open(['url' => 'informes', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('custodio_id') ? 'has-error' : ''}}">
                {!! Form::label('custodio_id', 'Solicitante: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {{ Form::select('custodio_id', $custodios, null, ['class' => 'form-control']) }}
                    {!! $errors->first('custodio_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area_id') ? 'has-error' : ''}}">
                {!! Form::label('area_id', 'Area Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select('area_id', $areas, null, ['class' => 'form-control']) }}
                    {!! $errors->first('area_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('no_orden') ? 'has-error' : ''}}">
                {!! Form::label('no_orden', 'No Orden: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('no_orden', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('no_orden', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_solicitud') ? 'has-error' : ''}}">
                {!! Form::label('fecha_solicitud', 'Fecha Solicitud: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_solicitud', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_solicitud', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_ejecucion') ? 'has-error' : ''}}">
                {!! Form::label('fecha_ejecucion', 'Fecha Ejecucion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_ejecucion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_ejecucion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('hora_inicio') ? 'has-error' : ''}}">
                {!! Form::label('hora_inicio', 'Hora Inicio: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::time('hora_inicio', \Carbon\Carbon::now()->toTimeString(), ['class' => 'form-control']) !!}
                    {!! $errors->first('hora_inicio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('hora_fin') ? 'has-error' : ''}}">
                {!! Form::label('hora_fin', 'Hora Fin: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::time('hora_fin', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('hora_fin', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('informe_manto_prev_cate_id') ? 'has-error' : ''}}">
                {!! Form::label('informe_manto_prev_cate_id', 'Informe Manto Prev Cate Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select('informe_manto_prev_cate_id', $categoria_mant, null, ['class' => 'form-control']) }}
                    {!! $errors->first('informe_manto_prev_cate_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('requerimiento') ? 'has-error' : ''}}">
                {!! Form::label('requerimiento', 'Requerimiento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('requerimiento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('requerimiento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

                    {!! Form::hidden('solucion', ' ', ['class' => 'form-control']) !!}

                    {!! Form::hidden('resolucion', ' ', ['class' => 'form-control']) !!}



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