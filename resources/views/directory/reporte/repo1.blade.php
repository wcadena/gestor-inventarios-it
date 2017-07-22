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
    <h1>@lang('form.equipos')<a href="{{ url('reporte1excel') }}" class="btn btn-primary pull-right btn-sm"><i class='fa fa-file-excel-o'></i> Excel</a></h1>


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



