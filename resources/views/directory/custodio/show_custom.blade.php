@extends('layouts.master')

@section('content')

    <h1>Custodio</h1>
    <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Datos de Custodio</a></li>
            <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Hojas de entrega</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane " id="home">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <caption>Datos de Custodio</caption>
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
                                    <button type="submit" class="btn btn-primary btn-xs">@lang('form.update')</button>
                                </a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane active" id="profile">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <caption>Hojas de entrega Personalizadas</caption>
                        <thead>
                        <tr>
                            <th>ID.</th> <th>Fecha</th><th>Observacion</th><th>Antiguo Custodio</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($custodio->reponovedadeshm as $item)
                        <tr>
                            <td>{{ $item->id }}</td> <td> {{ $item->fecha_novedades }} </td><td> {{ $item->observaciones }} </td><td> {{ $item->antiguo_custodioxc->nombre_responsable }} </td>
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
    <hr />


    {!! Form::open(['url' => 'repo_novedades', 'class' => 'form-horizontal']) !!}

    {!! Form::hidden('custodio_id', $custodio->id, ['class' => 'form-control']) !!}

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
            {!! Form::select('novedad', \App\RepoNovedades::getENUM('novedad'), null, ['class' => 'form-control']) !!}
            {!! $errors->first('novedad', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('antiguo_custodio_id') ? 'has-error' : ''}} ">
        {!! Form::label('antiguo_custodio_id', "Antiguo Responsable", ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">

            {{ Form::select('antiguo_custodio_id', $custodios, null, ['class' => 'form-control']) }}
            {!! $errors->first('antiguo_custodio_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('observaciones') ? 'has-error' : ''}}">
        {!! Form::label('observaciones', 'Observaciones: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
            {!! $errors->first('observaciones', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
        {!! Form::label('estado', 'Estado: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('estado', \App\RepoNovedades::getENUM('estado'), null, ['class' => 'form-control']) !!}
            {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('traslado_custodio_id') ? 'has-error' : ''}} ">
        {!! Form::label('traslado_custodio_id', "Responsable Traslado", ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">

            {{ Form::select('traslado_custodio_id', $custodios, null, ['class' => 'form-control']) }}
            {!! $errors->first('traslado_custodio_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    <h1>Equipos a cargo de usuario</h1>
    {!! $errors->first('equipos', '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> :message
</div>') !!}
    <div class="table {{ $errors->has('equipos') ? 'has-error' : ''}}">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>@lang('form.sno')</th><th>Sociedad</th><th>No. RPM (Cód.Barras)</th>
                <th>@lang('form.codint')</th>
                <th>Descripción (Marca - Modelo)</th><th>@lang('form.noser')</th><th>Estado<th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @php $x=0; @endphp
            @foreach($custodio->equiposhm as $item)
                @php $x++;@endphp
                <tr>
                    <td>{{ Form::checkbox('equipos[]', $item->id, false) }}</td>
                    <td>{{ $item->sociedad }}</td><td><a href="{{ url('equipos', $item->id) }}">{{ $item->codigo_barras }}</a></td>
                    <td>{{ $item->codigo_avianca }}</td>
                    <td>{{ $item->modelo_equipoxc->modelo }}-{{ $item->modelo_equipoxc->fabricante }} {{ $item->descripcion }}</td><td>{{ $item->no_serie }}</td><td>{{ $item->estado }}</td>
                    <td>
                        <a href="{{ url('equipos/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">@lang('form.update')</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    {!! Form::close() !!}
@endsection