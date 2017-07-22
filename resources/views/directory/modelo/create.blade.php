@extends('layouts.master')
@section('htmlheader')
@include('layouts.partials.htmlheader')
        <!-- Select2
<link href="{{ asset('/plugins/jQueryUI/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
-->
@endsection
@section('content')

    <h1>Create New Modelo</h1>
    <hr/>

    {!! Form::open(['url' => 'modelo', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('modelo') ? 'has-error' : ''}}">
                {!! Form::label('modelo', 'Modelo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('modelo', null, ['class' => 'form-control','id'=>'modelo']) !!}
                    {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fabricante') ? 'has-error' : ''}}">
                {!! Form::label('fabricante', 'Fabricante: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fabricante', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fabricante', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('garantia_anios') ? 'has-error' : ''}}">
                {!! Form::label('garantia_anios', 'Garantia Anios: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('garantia_anios', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('garantia_anios', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tipo_equipo') ? 'has-error' : ''}}">
                {!! Form::label('tipo_equipo', 'Tipo Equipoareas: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    <code>*'DESKTOP','LAPTOP','CPU','CLON','IMPRESORA LASER','IMPRESORA MATRICIAL',etc...</code>
                    {!! Form::text('tipo_equipo', null, ['class' => 'form-control','id'=>'tipo_equipo']) !!}
                    {!! $errors->first('tipo_equipo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


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
            <!-- jquery ui
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>-->
        <script>
            window.onload = function() {
                $(function(){
                    $( "#tipo_equipo" ).autocomplete({
                    source: function( request, response ) {
                        $.ajax( {
                            url: "{{url('tags_model_tipo')}}",
                            dataType: "json",
                            data: {
                                term: request.term
                            },
                            success: function( data ) {
                                // Handle 'no match' indicated by [ "" ] response
                                response( data.length === 1 && data[ 0 ].length === 0 ? [] : data );
                            }
                        } );
                    },
                    minLength: 3
                } );
                    $( "#modelo" ).autocomplete({
                    source: function( request, response ) {
                        $.ajax( {
                            url: "{{url('tags_model_modelo')}}",
                            dataType: "json",
                            data: {
                                term: request.term
                            },
                            success: function( data ) {
                                // Handle 'no match' indicated by [ "" ] response
                                response( data.length === 1 && data[ 0 ].length === 0 ? [] : data );
                            }
                        } );
                    },
                    minLength: 3
                } );
                });
            }
        </script>
@endsection