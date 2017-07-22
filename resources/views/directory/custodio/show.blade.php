@extends('layouts.master')

@section('content')

    <h1>Custodio</h1>
    <div class="table-responsive">
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
                            <button type="submit" class="btn btn-primary btn-xs">@lang('form.update')</button>
                        </a></td>
                </tr>
            </tbody>    
        </table>
    </div>
    <hr />
    <a  id="sxxxdw3wsfg1"  class="zxsdfgsd33" href="{{ url('reasignar/'.$custodio->id) }}">
        <button class="zxsdfgsd33 btn btn-default" type="button">@lang('form.reqeq')</button>
    </a>
    <a  id="sxxxdw3wsfg3"  target="_blank" class="zxsdfgsd33" href="{{ url('pdf/'.$custodio->id) }}">
        <button class="zxsdfgsd33 btn btn-default" type="button">@lang('form.retg')</button>
    </a>
    <a  id="sxxxdw3wsfg2"   class="zxsdfgsd33" href="{{ url('custodio_custom/'.$custodio->id) }}">
        <button class="zxsdfgsd33 btn btn-default" type="button">@lang('form.retg_custom')</button>
    </a>
    <h1>Equipos a cargo de usuario</h1>
    <div class="table">
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
                    <td>{{ $x }}</td>
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

@endsection