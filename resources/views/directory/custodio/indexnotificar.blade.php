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
                var url ='{{url('custodiosNotificacion')}}?id='+id;
                $.ajax({
                    type: "GET",
                    url: url,
                    cache: false,
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader('Authorization', 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFmZTE4NDZiZTY0YmZjNDkwMGQ3Y2VmMjBiYzk4NzhkNWQ1YWM2OWIwNDgwNGQ4NjEyNzM2ZjcwNmRiMDM5MmY0Y2ZhY2Y5MWU0M2IxZTIwIn0.eyJhdWQiOiIxIiwianRpIjoiYWZlMTg0NmJlNjRiZmM0OTAwZDdjZWYyMGJjOTg3OGQ1ZDVhYzY5YjA0ODA0ZDg2MTI3MzZmNzA2ZGIwMzkyZjRjZmFjZjkxZTQzYjFlMjAiLCJpYXQiOjE1MDYyNjEzNjAsIm5iZiI6MTUwNjI2MTM2MCwiZXhwIjoxNTM3Nzk3MzYwLCJzdWIiOiI5Iiwic2NvcGVzIjpbXX0.y8G1acEh2VEguq4_p7ikaNYaaFsR7Ek6FeNy6U4ZEQhnGS4mn4ErNMiM4FqNHnxwhxQG5sva-qlv6s3i5pHOuRiYSaK3IIu3KmNbcXKR4_Q0Veyi_wa1Mzya-8bhhe7CZzCTd8weVPPTn2M52iki61xUY6pbus8ni8qbpFyG-LFf36kG3wpggvF7TJNG81fk3EyHZVrAPk2MUMLSEpLukEdOORrcsOOALAPpDAnWsldAFfyLrq0J4dCihMIEffTT__Tlc9AjFqwt4rYv0XP838cj3iHsrewJmx9Ifk276Yc6Hqw-iGtdOgvwGTQIb9Sh6hePndwdj_X476yKoYxP0ArnoZLm7mrVWaKGfntQXeqS31pZE7wlsHR6WxUUJc5IA-o9G6AdXXLtb5Mp7AEJFSqSTh9lCt25MuMl_ZhxzAzSPrOkWRaRKNMadW-k1heT2eVSgtpLWJEZqJlXR0Mb7QchcRzVXb5epss8yWxfikMlmdy_BBE0yVPcQ2jnTepA6c4LMiGa13g42hwwroSCJPEGEglsDo6SBf5OMlwfga_jJYnBFPh32R0kRJ7Si830nD5VzHnJr_pad48k7xqHDHX9iMUa_w0qEZDfCYXgrt_T1VK2tkqAXtTkOC27bqnfMmQb6uqoXo_JgkhAdbgZDgVeF_XF9FuTLTZk9gSydvY');
                    },
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
                //alert("Activar '->queue(new NotificaCustodioCambio($custodios));', solo para servidores linux con consola ");
                //return  $(this).hide();
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
                        var url ='{{url('custodiosNotificacion')}}?id='+id;

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