@extends('layouts.master')

@section('content')

    <h1>@lang('fo.Edit Estacione')</h1>
    <hr/>

    {!! Form::model($estacione, [
        'method' => 'PATCH',
        'url' => ['estaciones', $estacione->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nombre_largo') ? 'has-error' : ''}}">
                {!! Form::label('nombre_largo', trans('fo.nombre_largo'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre_largo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombre_largo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pais') ? 'has-error' : ''}}">
                {!! Form::label('pais', trans('fo.pais'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('pais', \App\Estaciones::getENUM('pais'), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('pais', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estacion') ? 'has-error' : ''}}">
                {!! Form::label('estacion', trans('fo.estacion'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('estacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
    <div class="form-group {{ $errors->has('empresa') ? 'has-error' : ''}}">
        {!! Form::label('empresa', trans('form.empresa'), ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('empresa', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
            {!! $errors->first('empresa', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit(trans('fo.Update'), ['class' => 'btn btn-primary form-control']) !!}
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