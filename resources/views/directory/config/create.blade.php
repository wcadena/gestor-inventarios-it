@extends('layouts.master')

@section('content')

    <h1>Create New Config</h1>
    <hr/>

    {!! Form::open(['url' => 'config', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('estacione_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('estacione_id', 'Estacione Id: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::number('estacione_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estacione_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('edificio') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('edificio', 'Edificio: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('edificio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('edificio', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('piso') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('piso', 'Piso: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('piso', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('piso', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('area_id', 'Area Id: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::number('area_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('area_id', '<p class="invalid-feedback">:message</p>') !!}
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