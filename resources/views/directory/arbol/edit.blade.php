@extends('layouts.app')

@section('main-content')

    <h1>Edit Arbol</h1>
    <hr/>

    {!! Form::model($arbol, [
        'method' => 'PATCH',
        'url' => ['arbol', $arbol->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nombre_comun') ? 'has-error' : ''}}">
                {!! Form::label('nombre_comun', 'Nombre Comun: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre_comun', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombre_comun', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nombre_cientifico') ? 'has-error' : ''}}">
                {!! Form::label('nombre_cientifico', 'Nombre Cientifico: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre_cientifico', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombre_cientifico', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('patrimonial') ? 'has-error' : ''}}">
                {!! Form::label('patrimonial', 'Patrimonial: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('patrimonial', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('patrimonial', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('patrimonial', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('historia') ? 'has-error' : ''}}">
                {!! Form::label('historia', 'Historia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('historia', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('historia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lat') ? 'has-error' : ''}}">
                {!! Form::label('lat', 'Lat: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lat', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lat', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lng') ? 'has-error' : ''}}">
                {!! Form::label('lng', 'Lng: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lng', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lng', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit(trans('form.update'), ['class' => 'btn btn-primary form-control']) !!}
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