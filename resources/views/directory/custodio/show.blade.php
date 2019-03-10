@extends('layouts.master')

@section('content')
    <div class="bg-image" style="background-image: url('{{ asset('media/photos/photo18@2x.jpg')}}');">
        <div class="bg-black-50">
            <div class="content content-full content-top">
                <div class="py-4 text-center">
                    <a class="img-link" href="javascript:void(0)">
                        <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ asset('media/avatars/avatar8.jpg')}}" alt="Usuario # {{ $custodio->id }}">
                    </a>
                    <h1 class="h2 font-w700 my-2 text-white">{{ $custodio->nombre_responsable }}</h1>
                    <h2 class="h4 font-w400 text-white-75 mb-0">
                        {{ $custodio->ciudad }}  <span class="text-primary-lighter">{{ $custodio->area_piso }}</span>
                    </h2>
                    <a class="text-primary-lighter" href="{{ url('custodio/' . $custodio->id . '/edit') }}">
                        <button type="submit" class="btn btn-sm btn-light m-1">@lang('form.update')</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="row">
            <div class="col-sm-4">
                <div class="block block-rounded block-bordered js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="-200">
                    <div class="block-content block-content-full">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-circle bg-body text-primary mx-auto">
                                <a  id="sxxxdw3wsfg1"  class="zxsdfgsd33" href="{{ url('reasignar/'.$custodio->id) }}">
                                    <i class="far fa-2x fa-handshake"></i>
                                </a>
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">@lang('form.reqeq')</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="block block-rounded block-bordered js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="-200" data-timeout="200">
                    <div class="block-content block-content-full">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-circle bg-body text-danger mx-auto">
                                <a  id="sxxxdw3wsfg3"  target="_blank" class="zxsdfgsd33" href="{{ url('pdf/'.$custodio->documentoIdentificacion) }}">
                                    <i class="fa fa-2x fa-clipboard-list"></i>
                                </a>
                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">@lang('form.retg')</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="block block-rounded block-bordered js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="-200" data-timeout="400">
                    <div class="block-content block-content-full">
                        <div class="py-5 text-center">
                            <div class="item item-2x item-circle bg-body text-success mx-auto">
                                <a  id="sxxxdw3wsfg2"   class="zxsdfgsd33" href="{{ url('custodio_custom/'.$custodio->id) }}">
                                    <i class="far fa-2x fa-file-pdf"></i>
                                </a>

                            </div>
                            <div class="font-size-h4 font-w600 pt-3 mb-0">@lang('form.retg_custom')</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-rounded block-bordered">

            <div class="block-content">

                <h1>@lang('fo.Equipos a cargo de usuario')</h1>
                <div class="table-responsive">

                    <div class="table">

                        <table class="table table-bordered table-striped table-hover">

                            <thead>
                            <tr>
                                <th>@lang('form.sno')</th><th>@lang('fo.Sociedad')</th><th>@lang('fo.No. RPM (Cód.Barras)')</th>
                                <th>@lang('form.codint')</th>
                                <th>@lang('fo.Descripción (Marca - Modelo)')</th><th>@lang('form.noser')</th><th>@lang('fo.Estado')<th>@lang('fo.Actions')</th>
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
        </div>
    </div>


@endsection