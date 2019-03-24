@extends('layouts.master')


@section('contentheader_aqui', 'Hoja de Entrega')

@section('content')


    <!-- Hero -->
    <div class="bg-body-light d-print-none">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Acta de Entrega</h1>
                {{--<button type="button" class="btn btn-hero-success my-2">
                    <i class="fa fa-fw fa-plus mr-1"></i> Nueva Acta de Entrega
                </button>--}}
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- Invoice -->
        <div class="block block-fx-shadow">
            <div class="block-header block-header-default">
                <h3 class="block-title">Fecha: {{$date}}</h3>
                <div class="block-options">
                    <!-- Print Page functionality is initialized in Helpers.print() -->
                    <button type="button" class="btn-block-option" onclick="Dashmix.helpers('print');">
                        <i class="si si-printer mr-1"></i> Imprimir Acta
                    </button>
                </div>
            </div>

            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    @include('pdf.invoice_cuerpo')
                </div>
            </div>
            <!-- END Invoice -->
        </div>
        <!-- END Page Content -->
    </div>
@endsection
