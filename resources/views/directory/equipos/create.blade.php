@extends('layouts.master')

@section('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">@lang('form.kijhuu7y')</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Equipos</li>
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
                <h3 class="block-title">Equipos</h3>
            </div>
            <div class="block-content">
            {!! Form::open(['url' => 'equipos', 'class' => 'form-horizontal', 'files' => true]) !!}
            <!-- Basic Elements -->
                <h2 class="content-heading pt-0">Información Fija</h2>
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            Información del nuevo activo.
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">

                        <div class="form-group ">
                            {!! Form::label('orden_de_compra_id', 'Orden De Compra Id: ', ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {{ Form::select('orden_de_compra_id', $dtos['orden'], null, ['class' => 'form-control chosen-select'.($errors->has('orden_de_compra_id') ? ' form-control-alt is-invalid' : '')]) }}
                                {!! $errors->first('orden_de_compra_id', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('modelo_equipo_id', 'Modelo Id: ', ['class' => 'control-label']) !!}
                            <div class="ekihk">

                                {!! Form::select('modelo_equipo_id', $dtos['modelos'], null, ['class' => 'form-control chosen-select'.($errors->has('modelo_equipo_id') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('custodio_id', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>


                        <div class="form-group ">
                            {!! Form::label('custodio_id', trans('form.asadd2'), ['class' => 'control-label']) !!}
                            <div class="ekihk">

                                {!! Form::select('custodio_id', $dtos['custodio'], $dtos['custodio_defecto'], ['class' => 'form-control chosen-select'.($errors->has('custodio_id') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('custodio_id', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('estacione_id', trans('form.eid3'), ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {!! Form::select('estacione_id', $dtos['estaciones'], null, ['class' => 'chosen-select form-control'.($errors->has('estacione_id') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('estacione_id', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('area_id', trans('form.ai3e'), ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {!! Form::select('area_id', $dtos['areas'], $dtos['areas_defualt'], ['class' => 'chosen-select form-control'.($errors->has('area_id') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('area_id', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('check_list_id', trans('form.clid32'), ['class' => 'control-label']) !!}
                            <div class="ekihk">

                                {!! Form::select('check_list_id', $dtos['check_lists'], null, ['class' => 'form-control'.($errors->has('check_list_id') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('check_list_id', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('num_cajas', trans('form.ncs234'), ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {!! Form::number('num_cajas', null, ['class' => 'form-control'.($errors->has('num_cajas') ? ' form-control-alt is-invalid' : ''),'min'=>"0"]) !!}
                                {!! $errors->first('num_cajas', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('sociedad', trans('form.sxs3'), ['class' => 'control-label'.($errors->has('sociedad') ? ' form-control-alt is-invalid' : '')]) !!}
                            <div class="ekihk">
                                {!! Form::text('sociedad', Auth::user()->empresa, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
                                {!! $errors->first('sociedad', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('no_serie', 'No Serie: ', ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {!! Form::text('no_serie', null, ['class' => 'form-control'.($errors->has('no_serie') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('no_serie', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        {{--<div class="form-group {{ $errors->has('codigo_barras') ? ' form-control-alt is-invalid' : ''}}">
                            {!! Form::label('codigo_barras', 'Codigo Barras: ', ['class' => 'control-label']) !!}
                            <div class="ekihk">

                                {!! $errors->first('codigo_barras', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>--}}{!! Form::hidden('codigo_barras', null, ['class' => 'form-control']) !!}
                        <div class="form-group ">
                            {!! Form::label('codigo_avianca', 'Codigo Avianca: ', ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {!! Form::text('codigo_avianca', null, ['class' => 'form-control'.($errors->has('codigo_avianca') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('codigo_avianca', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        {{--<div class="form-group {{ $errors->has('codigo_otro') ? ' form-control-alt is-invalid' : ''}}">
                            {!! Form::label('codigo_otro', 'Codigo Otro: ', ['class' => 'control-label']) !!}
                            <div class="ekihk">

                                {!! $errors->first('codigo_otro', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>--}}
                        {!! Form::hidden('codigo_otro', null, ['class' => 'form-control']) !!}
                        <div class="form-group ">
                            {!! Form::label('descripcion', 'Descripcion: ', ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {!! Form::text('descripcion', null, ['class' => 'form-control'.($errors->has('descripcion') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('descripcion', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('ip', 'Ip: ', ['class' => 'control-label'.($errors->has('ip') ? ' form-control-alt is-invalid' : '')]) !!}
                            <div class="ekihk">
                                {!! Form::text('ip', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('ip', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group ">
                            {!! Form::label('estado', 'Estado: ', ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {!! Form::select('estado', \App\Equipos::getENUM('estado'), null, ['class' => 'chosen-select form-control'.($errors->has('estado') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('estado', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('estatus', 'Estatus: ', ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {!! Form::select('estatus', \App\Equipos::getENUM('estatus'), null, ['class' => 'chosen-select form-control'.($errors->has('estatus') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('estatus', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('garantia', 'Garantia: ', ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {!! Form::select('garantia', \App\Equipos::getENUM('garantia'), null, ['class' => 'chosen-select form-control'.($errors->has('garantia') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('garantia', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group >
                            {!! Form::label('observaciones', 'Observaciones: ', ['class' => 'control-label']) !!}
                            <div class="ekihk" >
                                {!! Form::text('observaciones', null, ['class' => 'form-control'.($errors->has('observaciones')? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('observaciones', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('imagen', 'Imagen: ', ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {!! Form::file('imagen', null, ['class' => 'form-control'.($errors->has('imagen') ? 'form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('imagen', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('empresa_procede1', trans('form.empresa_procede1'), ['class' => 'control-label']) !!}
                            <div class="ekihk">

                                {{ Form::select('empresa_procede1', $dtos['empresa'], null, ['class' => 'chosen-select form-control'.($errors->has('empresa_procede1') ? ' form-control-alt is-invalid' : '')]) }}
                                {!! $errors->first('empresa_procede1', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="block-content row justify-content-center border-top">
                            <div class="col-9">
                                {!! Form::button(__('<i class="fa fa-fw fa-save mr-1"></i> Crear'), ['class' => 'btn btn-block btn-hero-primary','type' => 'submit']) !!}
                            </div>
                        </div>
                        <!-- END Submit -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-3">

                            </div>
                        </div>
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

