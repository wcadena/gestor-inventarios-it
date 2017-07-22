@extends('layouts.master')

@section('content')

    <h1>Repo_novedade</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Custodio Id</th><th>Correo</th><th>Fecha Novedades</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $repo_novedade->id }}</td> <td> {{ $repo_novedade->custodio_id }} </td><td> {{ $repo_novedade->correo }} </td><td> {{ $repo_novedade->fecha_novedades }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

    <a  id="sxxxdw3wsfg3"  target="_blank" class="zxsdfgsd33" href="{{ url('pdf_custom/'.$repo_novedade->id) }}">
        <button class="zxsdfgsd33 btn btn-default" type="button">Impresion De PDF</button>
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

            @foreach($repo_novedade->reponovedadedetalleshm as $item)
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