@extends('layouts.master')

@section('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="block-header block-header-default">
            <h1 class="block-title">Reporte de novedades</h1>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <a target="_blank" href="{{ url('pdf_custom/'.$repo_novedade->token_unico) }}" class="btn btn-hero-primary js-click-ripple-enabled">
                        <i class="far fa-file-pdf"></i> Impresion De PDF
                    </a>
                </button>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <!-- Page Content -->
    <div class="content">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>ID.</th> <th>Custodio</th><th>Correo</th><th>Fecha Novedades</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $repo_novedade->id }}</td> <td> <a href="{{ url('custodio', $repo_novedade->custodioxc->id) }}">{{ $repo_novedade->custodioxc->nombre_responsable }} </a></td><td> {{ $repo_novedade->correo }} </td><td> {{ $repo_novedade->fecha_novedades }} </td>
                </tr>
                </tbody>
            </table>
        </div>


        <h3>Equipos en el reporte </h3>
        <div class="table-responsive">

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
                                    <button type="submit" class="btn btn-sm btn-light m-1">@lang('form.update')</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
@endsection