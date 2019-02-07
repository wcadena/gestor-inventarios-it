@extends('layouts.master')

@section('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Custodio</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Custodio</li>
                        <li class="breadcrumb-item active" aria-current="page">Hojas de entrega personalizada</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <!-- Page Content -->
    <div class="content">
        <div class="block block-rounded block-bordered">
            <ul class="nav nav-tabs nav-tabs-block align-items-center js-tabs-enabled" data-toggle="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" href="#home" aria-controls="home" role="tab" data-toggle="tab">Custodio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Hoja</a>
                </li>
                <li class="nav-item ml-auto">
                    <div class="block-options pl-3 pr-2">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                    </div>
                </li>
            </ul>
            <div class="block-content tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <h4 class="font-w400">Datos de Custodio</h4>
                    <div class="table-responsive">

                        <div class="table">

                            <table class="table table-bordered table-striped table-hover">

                                <thead>
                                <tr>
                                    <th>ID.</th> <th>Nombre Responsable</th><th>Ciudad</th><th>Direccion</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $custodio->id }}</td> <td> {{ $custodio->nombre_responsable }} </td><td> {{ $custodio->ciudad }} </td><td> {{ $custodio->direccion }} </td>
                                    <td><a href="{{ url('custodio/' . $custodio->id . '/edit') }}">
                                            <button type="submit" class="btn btn-sm btn-light m-1">@lang('form.update')</button>
                                        </a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="profile" role="tabpanel">
                    <h4 class="font-w400">Hojas de entrega</h4>
                    <div class="table-responsive">

                        <div class="table">

                            <table class="table table-bordered table-striped table-hover">

                                <thead>
                                <tr>
                                    <th>ID.</th> <th>Fecha</th><th>Observacion</th><th>Antiguo Custodio</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($custodio->reponovedadeshm as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td> <td> {{ $item->fecha_novedades }} </td><td> {{ $item->observaciones }} </td>

                                        <td> {{ $item->antiguo_custodioxc['nombre_responsable'] }} </td>

                                        <td>
                                            <a href="{{ url('repo_novedades/' . $item->id ) }}">
                                                <button type="submit" class="btn btn-primary btn-xs">Ver Previo</button>
                                            </a>
                                            {!! Form::open([

                                        'method'=>'DELETE',

                                        'url' => ['repo_novedades', $item->id],

                                        'style' => 'display:inline'

                                    ]) !!}

                                            {!! Form::submit('Borrar hoja', ['class' => 'btn btn-danger btn-xs']) !!}

                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<hr>

        {!! Form::open(['url' => 'repo_novedades', 'class' => 'form-horizontal']) !!}

        {!! Form::hidden('custodio_id', $custodio->id, ['class' => 'form-control']) !!}

        <div class="form-group {{ $errors->has('correo') ? ' form-control-alt is-invalid' : ''}}">
            {!! Form::label('correo', 'Correo: ', ['class' => 'control-label']) !!}
            <div class="ekihk">
                {!! Form::text('correo', $custodio->email, ['class' => 'form-control']) !!}
                {!! $errors->first('correo', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('fecha_novedades') ? ' form-control-alt is-invalid' : ''}}">
            {!! Form::label('fecha_novedades', 'Fecha Novedades: ', ['class' => 'control-label']) !!}
            <div class="ekihk">
                {!! Form::date('fecha_novedades', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                {!! $errors->first('fecha_novedades', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('novedad') ? ' form-control-alt is-invalid' : ''}}">
            {!! Form::label('novedad', 'Novedad: ', ['class' => 'control-label']) !!}
            <div class="ekihk">
                {!! Form::select('novedad', \App\RepoNovedades::getENUM('novedad'), null, ['class' => 'chosen-select form-control']) !!}
                {!! $errors->first('novedad', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('antiguo_custodio_id') ? ' form-control-alt is-invalid' : ''}} ">
            {!! Form::label('antiguo_custodio_id', "Antiguo Responsable", ['class' => 'control-label']) !!}
            <div class="ekihk">

                {{ Form::select('antiguo_custodio_id', $custodios, App\Configuracion::Config('CUSTODIO_BODEGA'), ['class' => 'chosen-select form-control']) }}
                {!! $errors->first('antiguo_custodio_id', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('observaciones') ? ' form-control-alt is-invalid' : ''}}">
            {!! Form::label('observaciones', 'Observaciones: ', ['class' => 'control-label']) !!}
            <div class="ekihk">
                {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
                {!! $errors->first('observaciones', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('estado') ? ' form-control-alt is-invalid' : ''}}">
            {!! Form::label('estado', 'Estado: ', ['class' => 'control-label']) !!}
            <div class="ekihk">
                {!! Form::select('estado', \App\RepoNovedades::getENUM('estado'), null, ['class' => 'chosen-select form-control']) !!}
                {!! $errors->first('estado', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('traslado_custodio_id') ? ' form-control-alt is-invalid' : ''}} ">
            {!! Form::label('traslado_custodio_id', "Responsable Traslado", ['class' => 'control-label']) !!}
            <div class="ekihk">

                {{ Form::select('traslado_custodio_id', $custodios, null, ['class' => 'chosen-select form-control']) }}
                {!! $errors->first('traslado_custodio_id', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
                {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>
        <h1>@lang('fo.Equipos a cargo de usuario')</h1>
        {!! $errors->first('equipos', '<div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Warning!</strong> :message
    </div>') !!}
        <div class="table {{ $errors->has('equipos') ? ' form-control-alt is-invalid' : ''}}">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>@lang('form.sno')</th>
                    <th>@lang('fo.Sociedad')</th>
                    <th>@lang('fo.no_serie')</th>
                    <th>@lang('form.codint')</th>
                    <th>@lang('fo.Descripción (Marca - Modelo)')</th>
                    <th>@lang('form.noser')</th>
                    <th>@lang('fo.Estado')</th>
                    <th>@lang('fo.RepoNovedades')</th>
                    <th>@lang('fo.Actions')</th>
                </tr>
                </thead>
                <tbody>
                @php $x=0; @endphp

                @foreach($custodio->equiposhm as $item)
                    @php $x++;@endphp
                    <tr>
                        <td>{{ Form::checkbox('equipos[]', $item->id, false) }}</td>
                        <td>{{ $item->sociedad }}</td>
                        <td><a href="{{ url('equipos', $item->id) }}">{{ $item->no_serie }}</a></td>
                        <td>{{ $item->codigo_avianca }}</td>
                        <td>{{ $item->modelo_equipoxc->modelo }}-{{ $item->modelo_equipoxc->fabricante }} {{ $item->descripcion }}</td>
                        <td>{{ $item->no_serie }}</td>
                        <td>{{ $item->estado }}</td>
                        <td>
                            @if($item->equipos_reponovedadesdetalle['repo_novedades_id']>0)
                                @foreach($item->equipos_reponovedadesdetalle as $item2x)
                                    <a href="{{ url('repo_novedades/' .  $item2x['repo_novedades_id'] ) }}">
                                        ({{$item2x['repo_novedades_id']}})@lang('fo.Novedad')
                                    </a>
                                @endforeach
                            @else
                                @lang('fo.sinNovedad')
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('equipos/' . $item->id . '/edit') }}">
                                <button type="submit" class="btn btn-sm btn-light m-1">@lang('form.update')</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        {!! Form::close() !!}
    </div>
@endsection