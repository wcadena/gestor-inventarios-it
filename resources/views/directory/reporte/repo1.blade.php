@extends('layouts.master')


@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
@endsection

@section('contentheader_aqui', 'Reportes')

@section('content')

    <!-- Full Table -->
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">@lang('form.equipos')</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <a href="{{ url('reporte1excel') }}" class="btn btn-hero-primary js-click-ripple-enabled"><i class="far fa-file-excel"></i> @lang('rep.Excel')</a>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="table-responsive">

        <div class=" scroll-area">
            @php( $link_d=true)
        @include('directory.reporte.repo1excel')
        </div>
            </div>
        </div>
    </div>

@endsection


@section('js_after')

    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>

        window.onload = function() {
            $(function () {

                $('#repoTable').DataTable();

            });
        }
    </script>
@endsection



