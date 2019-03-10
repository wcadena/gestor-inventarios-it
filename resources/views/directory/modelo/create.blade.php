@extends('layouts.master')


@section('contentheader_aqui', 'Modelos')

@section('content')

    <h1>@lang('fo.Create New Modelo')</h1>
    <hr/>

    {!! Form::open(['url' => 'modelo', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('modelo') ? ' form-control-alt is-invalid' : ''}}">
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
                    {!! $errors->first('modelo', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fabricante') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('fabricante', trans('fo.fabricante'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('fabricante', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fabricante', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('garantia_anios') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('garantia_anios', trans('fo.garantia_anios'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::number('garantia_anios', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('garantia_anios', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tipo_equipo') ? ' form-control-alt is-invalid' : ''}}">
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

                {!! $errors->first('tipo_equipo', '<p class="invalid-feedback">:message</p>') !!}
                    <!--https://github.com/BosNaufal/vue2-autocomplete -->






                </div>
            </div>


    <div class="form-group" style="z-index: 1000;">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::button(__('<i class="fa fa-fw fa-save mr-1"></i> Crear'), ['class' => 'btn btn-block btn-hero-primary','type' => 'submit']) !!}
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
