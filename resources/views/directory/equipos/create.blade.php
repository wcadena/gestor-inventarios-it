@extends('layouts.master')

@section('content')

    <h1>@lang('form.kijhuu7y')</h1>
    <hr/>

    {!! Form::open(['url' => 'equipos', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('orden_de_compra_id') ? 'has-error' : ''}}">
                {!! Form::label('orden_de_compra_id', 'Orden De Compra Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select('orden_de_compra_id', $dtos['orden'], null, ['class' => 'form-control']) }}
                    {!! $errors->first('orden_de_compra_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
    <div class="form-group {{ $errors->has('modelo_equipo_id') ? 'has-error' : ''}}">
        {!! Form::label('modelo_equipo_id', 'Modelo Id: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">

            {!! Form::select('modelo_equipo_id', $dtos['modelos'], null, ['class' => 'form-control']) !!}
            {!! $errors->first('custodio_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


            <div class="form-group {{ $errors->has('custodio_id') ? 'has-error' : ''}}">
                {!! Form::label('custodio_id', trans('form.asadd2'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {!! Form::select('custodio_id', $dtos['custodio'], null, ['class' => 'form-control']) !!}
                    {!! $errors->first('custodio_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estacione_id') ? 'has-error' : ''}}">
                {!! Form::label('estacione_id', trans('form.eid3'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('estacione_id', $dtos['estaciones'], null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estacione_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area_id') ? 'has-error' : ''}}">
                {!! Form::label('area_id', trans('form.ai3e'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('area_id', $dtos['areas'], null, ['class' => 'form-control']) !!}
                    {!! $errors->first('area_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('check_list_id') ? 'has-error' : ''}}">
                {!! Form::label('check_list_id', trans('form.clid32'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {!! Form::select('check_list_id', $dtos['check_lists'], null, ['class' => 'form-control']) !!}
                    {!! $errors->first('check_list_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('num_cajas') ? 'has-error' : ''}}">
                {!! Form::label('num_cajas', trans('form.ncs234'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('num_cajas', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('num_cajas', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sociedad') ? 'has-error' : ''}}">
                {!! Form::label('sociedad', trans('form.sxs3'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('sociedad', Auth::user()->padrino, ['class' => 'form-control']) !!}
                    {!! $errors->first('sociedad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('no_serie') ? 'has-error' : ''}}">
                {!! Form::label('no_serie', 'No Serie: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('no_serie', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('no_serie', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            {{--<div class="form-group {{ $errors->has('codigo_barras') ? 'has-error' : ''}}">
                {!! Form::label('codigo_barras', 'Codigo Barras: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {!! $errors->first('codigo_barras', '<p class="help-block">:message</p>') !!}
                </div>
            </div>--}}{!! Form::hidden('codigo_barras', null, ['class' => 'form-control']) !!}
            <div class="form-group {{ $errors->has('codigo_avianca') ? 'has-error' : ''}}">
                {!! Form::label('codigo_avianca', 'Codigo Avianca: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('codigo_avianca', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('codigo_avianca', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            {{--<div class="form-group {{ $errors->has('codigo_otro') ? 'has-error' : ''}}">
                {!! Form::label('codigo_otro', 'Codigo Otro: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {!! $errors->first('codigo_otro', '<p class="help-block">:message</p>') !!}
                </div>
            </div>--}}
            {!! Form::hidden('codigo_otro', null, ['class' => 'form-control']) !!}
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ip') ? 'has-error' : ''}}">
                {!! Form::label('ip', 'Ip: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ip', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                {!! Form::label('estado', 'Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('estado', \App\Equipos::getENUM('estado'), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estatus') ? 'has-error' : ''}}">
                {!! Form::label('estatus', 'Estatus: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('estatus', \App\Equipos::getENUM('estatus'), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estatus', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('garantia') ? 'has-error' : ''}}">
                {!! Form::label('garantia', 'Garantia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('garantia', \App\Equipos::getENUM('garantia'), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('garantia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('observaciones') ? 'has-error' : ''}}">
                {!! Form::label('observaciones', 'Observaciones: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('observaciones', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('observaciones', '<p class="help-block">:message</p>') !!}
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

