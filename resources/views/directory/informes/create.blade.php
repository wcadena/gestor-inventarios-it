@extends('layouts.master')
@section('htmlheader')

    @include('layouts.partials.htmlheader')

    <!-- Select2 -->

    <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet" type="text/css" />


@endsection
@section('content')

    <h1>Crear nuevo Informe</h1>
    <hr/>

    {!! Form::open(['url' => 'informes', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('requerimiento') ? 'has-error' : ''}}">
                {!! Form::label('requerimiento', 'Titulo Requerimiento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('requerimiento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('requerimiento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('custodio_id') ? 'has-error' : ''}}">
                {!! Form::label('custodio_id', 'Solicitante: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select('custodio_id', $custodios, (isset(Auth::user()->custodio))?Auth::user()->custodio->id:null, ['class' => 'form-control']) }}
                    {!! $errors->first('custodio_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area_id') ? 'has-error' : ''}}">
                {!! Form::label('area_id', 'Area Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select('area_id', $areas, null, ['class' => 'form-control']) }}
                    {!! $errors->first('area_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('fecha_solicitud') ? 'has-error' : ''}}">
                {!! Form::label('fecha_solicitud', 'Fecha Solicitud: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_solicitud', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_solicitud', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('informe_manto_prev_cate_id') ? 'has-error' : ''}}">
                {!! Form::label('informe_manto_prev_cate_id', 'Categoria: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select('informe_manto_prev_cate_id', $categoria_mant, null, ['class' => 'form-control']) }}
                    {!! $errors->first('informe_manto_prev_cate_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('observacion') ? 'has-error' : ''}}">
                {!! Form::label('observacion', 'Descripción : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('observacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                    {!! Form::hidden('solucion', ' ', ['class' => 'form-control']) !!}

                    {!! Form::hidden('resolucion', ' ', ['class' => 'form-control']) !!}

            <div class="form-group {{ $errors->has('_tec_user_id') ? 'has-error' : ''}}">
                {!! Form::label('_tec_user_id', 'Tecnicos : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{Form::select('_tec_user_id[]', array(), '',array('id' => '_tec_user_id','class' => 'id_serchf form-control','multiple'=>'multiple')) }}
                    {!! $errors->first('_tec_user_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
    {{(\App\Role::where('name','tecnico')->first()->users->pluck('name', 'id'))}}


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection

@section('scripts')

    @include('layouts.partials.scripts')

    <script src="{{ asset('/js/select2.min.js') }}"></script>

    <script>

      window.onload = function() {
        $(function () {

          $.fn.select2.defaults.set( "theme", "classic" );



          ///////////////////////////////////////////////////////////////////////////////////


          $('.id_serchf').select2({
            // Activamos la opcion "Tags" del plugin
            language: "es",
            placeholder: "Tecnico",
            tags: true,
            tokenSeparators: [','],
            templateResult: formatState,
            ajax: {
              dataType: 'json',
              url: '{{ route('role.user', \App\Role::where('name','tecnico')->first()) }}',
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