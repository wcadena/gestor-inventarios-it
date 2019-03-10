@extends('layouts.master')

@section('content')

    <h1>Create New Opciones_check</h1>
    <hr/>

    {!! Form::open(['url' => 'opciones_check', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('area_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('area_id', trans('form.ai3e'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {{ Form::select('area_id', $areas, null, ['class' => 'form-control']) }}
                    {!! $errors->first('area_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('atributo') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('atributo', 'Atributo: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('atributo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('atributo', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mandatorio') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('mandatorio', 'Mandatorio: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::select('mandatorio', \App\OpcionesCheckList::getENUM('mandatorio'), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mandatorio', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tipo') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('tipo', 'Tipo: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::select('tipo', \App\OpcionesCheckList::getENUM('tipo'), null, ['class' => 'form-control']) !!}

                    {!! $errors->first('tipo', '<p class="invalid-feedback">:message</p>') !!}
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