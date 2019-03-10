@extends('layouts.master')


@section('css_before')
    <link href="{{ asset('js/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('contentheader_aqui', 'Equipos')

@section('content')

    <!-- Full Table -->
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">@lang('form.equipos')</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <a href="{{ url('equipos/create') }}" class="btn btn-hero-primary js-click-ripple-enabled"><i class="si si-plus"></i> Equipo</a>
                </button>
            </div>
        </div>
        <div class="block-content">
            <p>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <a  id="sxxxdw3wsfg"  class="btn btn-primary zxsdfgsd33" href="{{ url('equipos/{idzx3er}/edit') }}">
                            <span class="zxsdfgsd33" ><i class="fa fa-search mr-1"></i> @lang('form.buscar')</span>
                        </a>
                    </div>
                    {!!Form::select('equipoidf', array(), '',array('id' => 'equipoidf','class' => 'id_serchf form-control')) !!}
                </div>
            </div>
            </p>
            <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover">

                    <thead>

                    <tr>

                        <th>@lang('form.sno')</th><th>Modelo</th><th>Custodio</th><th>Estacione</th><th>Actions</th>

                    </tr>

                    </thead>

                    <tbody>

                    @php $x=0; @endphp

                    @foreach($equipos as $item)

                        @php $x++;@endphp

                        <tr>

                            <td>{{ $x }}</td>

                            <td><a href="{{ url('equipos', $item->id) }}">{{ $item->modelo_equipoxc->modelo }}</a></td>
                            <td>{{ $item->custodioxc['nombre_responsable'] }}</td>
                            <td>{{ $item->estacionxc->estacion }}</td>

                            <td>

                                <a href="{{ url('equipos/' . $item->id . '/edit') }}">

                                    <button type="submit" class="btn btn-sm btn-light m-1">@lang('form.update')</button>

                                </a> /

                                {!! Form::open([

                                    'method'=>'DELETE',

                                    'url' => ['equipos', $item->id],

                                    'style' => 'display:inline'

                                ]) !!}

                                {!! Form::button(__('form.deletee'), ['class' => 'btn btn-sm btn-light m-1','type' => 'submit']) !!}

                                {!! Form::close() !!}

                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

                <div class="pagination"> {!! $equipos->render() !!} </div>



            </div>
        </div>
    </div>

@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/select2/js/select2.min.js') }}"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function(){ Dashmix.helpers('select2'); });</script>

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

      $(function () {



        //alert("hola");

        $('.zxsdfgsd33').click(function (e) {

          e.preventDefault();

          var a = $('#equipoidf').val();

          var b = $('#sxxxdw3wsfg').attr('href');

          var c = b.replace('{idzx3er}', a );

          redirect(c);



        });

        ///////////////////////////////////////////////////////////////////////////////////



        $('.id_serchf').select2({

          // Activamos la opcion "Tags" del plugin



          language: "es",

          placeholder: "Select Avianca Code",

          tags: true,

          tokenSeparators: [','],

          //templateResult: formatState,

          ajax: {

            dataType: 'json',

            url: '{{ url("tags") }}',

            delay: 250,

            data: function(params) {

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

        function formatState (state) {

          if (!state.id) { return state.text; }

          var $state = $(

            '<span>'+state.id+":" + state.text + '</span>'

          );

          return $state;

        };



        ///////////////////////////////////////////////////////////////////////////////////////



      });





    </script>
@endsection