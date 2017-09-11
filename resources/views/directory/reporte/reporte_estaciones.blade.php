@extends('layouts.master')


@section('content')

    <link href="{{ asset('https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .scroll-area{
            width: 100%;
            height: 100%;
            overflow: scroll;
        }
    </style>
    <section class="content">
        <div class="list-group">
            @foreach($estaciones as $item)
            <a href="{{url('reporteEstaciones/'.$item->estacione_id)}}" class="list-group-item @if($item->estacione_id == $estacione_id) active @endif">
                <h5 class="list-group-item-heading">{{$item->estacion}}</h5>
                <p class="list-group-item-text">Tiene {{$item->Contador}} equipos</p>
            </a>
            @endforeach
        </div>
    </section>
    <h1>@lang('home.menrep2') / @lang('form.equipos') <a href="{{ url('reporte1excelEstaciones/'.$estacione_id) }}" class="btn btn-primary pull-right btn-sm"><i class='fa fa-file-excel-o'></i> Excel</a></h1>


    <div class=" scroll-area">
        @php( $link_d=true)
        @include('directory.reporte.repo1excel')
    </div>

@endsection


@section('scripts')
    @include('layouts.partials.scripts')

    <!-- Tabla -->
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>


    <script>

        window.onload = function() {
            $(function () {

                $('#repoTable').DataTable();

            });
        }
    </script>
@endsection



