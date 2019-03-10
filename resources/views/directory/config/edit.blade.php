@extends('layouts.master')

@section('content')

    <h1>Edit Config</h1>
    <hr/>

    {!! Form::model($config, [
        'method' => 'PATCH',
        'url' => ['config', $config->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('estacione_id') ? 'has-error' : ''}}">
                {!! Form::label('estacione_id', 'Estacione Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('estacione_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estacione_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('edificio') ? 'has-error' : ''}}">
                {!! Form::label('edificio', 'Edificio: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('edificio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('edificio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('piso') ? 'has-error' : ''}}">
                {!! Form::label('piso', 'Piso: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('piso', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('piso', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area_id') ? 'has-error' : ''}}">
                {!! Form::label('area_id', 'Area Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('area_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('area_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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