@extends('layouts.master')
@section('htmlheader')
@include('layouts.partials.htmlheader')
        <!-- Select2
<link href="{{ asset('/plugins/jQueryUI/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
-->
@endsection
@section('content')

    <h1>@lang('fo.Create New Modelo')</h1>
    <hr/>

    {!! Form::open(['url' => 'modelo', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('modelo') ? 'has-error' : ''}}">
                {!! Form::label('modelo', 'Modelo: ', ['class' => 'control-label']) !!}
                <div class="ekihk">

                    <autocomplete-vue
                            url="{{url('tags_model_modelo')}}"
                            requestType="get"
                            anchor = "modelo"
                            deepValue=""
                            label="writer"
                            class = "form-control"
                            id= "modelo"
                            name = "modelo"
                            param = "term"
                            className="form-control"
                            :classes="{ wrapper: 'panel panel-default ', input: 'form-control', list: 'data-list list-group', item: 'data-list-item list-group-item' }"
                            placeholder="Modelo"
                    ></autocomplete-vue>
                    {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fabricante') ? 'has-error' : ''}}">
                {!! Form::label('fabricante', trans('fo.fabricante'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('fabricante', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fabricante', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('garantia_anios') ? 'has-error' : ''}}">
                {!! Form::label('garantia_anios', trans('fo.garantia_anios'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::number('garantia_anios', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('garantia_anios', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tipo_equipo') ? 'has-error' : ''}}">
                {!! Form::label('tipo_equipo', trans('fo.tipo_equipo'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    <code>*'DESKTOP','LAPTOP','CPU','CLON','IMPRESORA LASER','IMPRESORA MATRICIAL',etc...</code>
                    <autocomplete-vue
                            url="{{url('tags_model_tipo')}}"
                            requestType="get"
                            anchor = "tipo_equipo"
                            deepValue=""
                            label="writer"
                            class = "form-control"
                            id= "tipo_equipo"
                            name = "tipo_equipo"
                            param = "term"
                            className="form-control"
                            :classes="{ wrapper: 'panel panel-default ', input: 'form-control', list: 'data-list list-group', item: 'data-list-item list-group-item' }"
                            placeholder="Tipo de equipo"
                    ></autocomplete-vue>

                {!! $errors->first('tipo_equipo', '<p class="help-block">:message</p>') !!}
                    <!--https://github.com/BosNaufal/vue2-autocomplete -->






                </div>
            </div>


    <div class="form-group" style="z-index: 1000;">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit(trans('fo.Create'), ['class' => 'btn btn-primary form-control']) !!}
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

@endsection