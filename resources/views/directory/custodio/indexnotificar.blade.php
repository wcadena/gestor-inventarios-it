@extends('layouts.master')

@section('htmlheader')

    @include('layouts.partials.htmlheader')

    <!-- Select2 -->

    <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet" type="text/css" />



@endsection

@section('content')



    <h1>@lang('fo.notificar_custodio') <a href="#" class="btn btn-primary pull-right btn-sm notifica_mailSend_masivo">@lang('fo.notificar_custodio_todos') </a></h1>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>@lang('fo.atencion')</strong>@lang('fo.mensaje_de_notificacion_pagina')
    </div>
    <div class="pull-right btn-sm" id="{{'alert-x'}}"></div>
    <div class="table">

        <table class="table table-bordered table-striped table-hover">

            <thead>

            <tr>

                <th>@lang('form.sno')</th><th>@lang('fo.nombre_responsable')</th><th>@lang('fo.ciudad')</th><th>@lang('fo.direccion')</th><th>@lang('fo.Acciones')</th>

            </tr>

            </thead>

            <tbody>

            @php $x=0; @endphp

            @foreach($custodio as $item)

                @php $x++;@endphp

                <tr class="linea_notificacion" data-id="{{$item->id}}" id="linea_notificacion-{{$item->id}}" >

                    <td>{{ $x }}</td>

                    <td><a href="{{ url('custodio', $item->id) }}">{{ $item->nombre_responsable }}</a></td><td>{{ $item->ciudad }}</td><td>{{ $item->direccion }}</td>

                    <td id="notifica_celda_{{$item->id}}">
                        <a href="#" data-id="{{$item->id}}">
                            <button type="button" class="btn btn-primary btn-xs notifica_mailSend">@lang('fo.notificar_custodio_uno')</button>
                        </a>

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

        <div class="pagination"> {!! $custodio->render() !!} </div>

    </div>



@endsection

@section('scripts')
    @include('layouts.partials.scripts')

    <script>
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //alert("hola");
            $('button.notifica_mailSend').click(function (e) {

                e.preventDefault();
                var a= $(this).parents("tr");
                var id = (a.data('id'));
                var $btn = $(this).button('loading');
                var url ='{{url('api/custodiosNotificacion')}}?id='+id;
                $.ajax({
                    type: "GET",
                    url: url,
                    cache: false,
                    success: function(data){
                        //alert("listo:"+data);
                        $("#alert-x").fadeIn();
                        $("#alert-x").html("<strong>Actualizado!</strong> Actualizado sin novedad ");
                        $("#alert-x").fadeOut();
                        $btn.button('reset');
                        a.hide();
                    },error: function(xhr, status, error) {
                        console.log(error);
                        console.log(status);
                        console.log(xhr);
                        $('#notifica_celda_'+id).html(xhr.responseJSON.data);
                        $btn.button('reset');
                    }
                });

            });

            $('.notifica_mailSend_masivo').click(function (e) {
                e.preventDefault();
                alert("Activar '->queue(new NotificaCustodioCambio($custodios));', solo para servidores linux con consola ");
                return  $(this).hide();
                if (confirm('¿Mandar mensajes masivos a todos los usuarios?')) {
                    var correos = [];
                    @foreach($custodio as $item)
                            correos.push({{$item->id}});
                    @endforeach
                        fLen = correos.length;
                    for (i = 0; i < fLen; i++) {
                        var a   =  $('#linea_notificacion-'+correos[i]);
                        a.fadeOut();
                        var id = correos[i];
                        var url ='{{url('api/custodiosNotificacion')}}?id='+id;

                        $.ajax({
                            type: "GET",
                            url: url,
                            cache: false,
                            success: function(data){
                                //alert("listo:"+data);
                                $("#alert-x").fadeIn();
                                $("#alert-x").html("<strong>Actualizado!</strong> Actualizado sin novedad ");
                                $("#alert-x").fadeOut();

                            },error: function(xhr, status, error,data) {
                                console.log(error);
                                console.log(status);
                                console.log(xhr);
                                $('#notifica_celda_'+id).html(xhr.responseJSON.data);
                                a.fadeIn();
                            }
                        });
                    }
                }
            });

            ///////////////////////////////////////////////////////////////////////////////////////

        });

    </script>
@endsection