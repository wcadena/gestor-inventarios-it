@extends('layouts.master')

@section('htmlheader')

    @include('layouts.partials.htmlheader')

    <!-- Select2 -->

    <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet" type="text/css" />


@endsection
@section('content')



    <h1>@lang('form.equipos') de {{$nombre_responsable2}}<a href="{{ url('equipos/create') }}" class="btn btn-primary pull-right btn-sm">@lang('form.addnew') Equipo</a></h1>


    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <fieldset>

        <div class="form-group" >
            {!! Form::open([
                            'method'=>'POST',
                            'url' => ['reasignarindexecho']
                        ]) !!}
            <div class="input-group">

             <span class="input-group-btn">



                    {!! Form::submit('Asignar Equipos', ['class' => ' btn btn-default']) !!}



              </span>

                <div class="form-group {{ $errors->has('equipoidfull') ? 'has-error' : ''}}">

                    <div>
                        {{Form::select('equipoidfull[]', array(), '',array('id' => 'equipoidfull','class' => 'doremfg67y id_serchf form-control','multiple'=>'multiple')) }}
                        {!! $errors->first('equipoidfull', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>





                {{ Form::hidden('custodio_id', $custodio_id) }}



            </div>
            {!! Form::close() !!}
            <label for="equipoid">Equipo </label>





        </div>



    </fieldset>

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

            @foreach($equipos as $item)

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

        <div class="pagination"> {!! $equipos->render() !!} </div>

    </div>



@endsection



@section('scripts')

    @include('layouts.partials.scripts')

    <script src="{{ asset('/js/select2.min.js') }}"></script>

    <script>

        function redirect (url) {

            var ua        = navigator.userAgent.toLowerCase(),

                isIE      = ua.indexOf('msie') !== -1,

                version   = parseInt(ua.substr(4, 2), 10);



            // Internet Explorer 8 and lower

            if (isIE && version < 9) {

                var link = document.createElement('a');

                link.href = url;

                document.body.appendChild(link);

                link.click();

            }



            // All other browsers can use the standard window.location.href (they don't lose HTTP_REFERER like IE8 & lower does)

            else {

                window.location.href = url;

            }

        }

        window.onload = function() {
            $(function () {

                $.fn.select2.defaults.set( "theme", "classic" );

                //alert("hola");

                $('.zxsdfgsd33').click(function (e) {

                    e.preventDefault();

                    var a = $('#equipoidf').val();

                    var b = $('#sxxxdw3wsfg').attr('href');

                    var c = b.replace('{idzx3er}', a);

                    redirect(c);


                });

                ///////////////////////////////////////////////////////////////////////////////////


                $('.id_serchf').select2({

                    // Activamos la opcion "Tags" del plugin


                    language: "es",

                    placeholder: "Select Avianca Code",

                    tags: true,

                    tokenSeparators: [','],

                    templateResult: formatState,

                    ajax: {

                        dataType: 'json',

                        url: '{{ url("tags") }}',

                        delay: 250,

                        data: function (params) {

                            return {

                                term: params.term

                            }

                        },

                        processResults: function (data, page) {

                            return {

                                results: data

                            };

                        },

                    }

                });

                ///////////////////////////////////////////////////////////////////////////////////////////

                function formatState(state) {

                    if (!state.id) {
                        return state.text;
                    }

                    var $state = $(
                        '<span>' + state.id + ":" + state.text + '</span>'
                    );

                    return $state;

                };


                ///////////////////////////////////////////////////////////////////////////////////////


            });
        };




    </script>

@endsection

