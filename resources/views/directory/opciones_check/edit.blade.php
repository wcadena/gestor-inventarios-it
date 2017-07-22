@extends('layouts.master')

@section('content')

    <h1>Edit Opciones_check</h1>
    <hr/>

    {!! Form::model($opciones_check, [
        'method' => 'PATCH',
        'url' => ['opciones_check', $opciones_check->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('area_id') ? 'has-error' : ''}}">
                {!! Form::label('area_id', trans('form.ai3e'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select('area_id', $opciones_check->extras2, null, ['class' => 'form-control']) }}
                    {!! $errors->first('area_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('atributo') ? 'has-error' : ''}}">
                {!! Form::label('atributo', 'Atributo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('atributo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('atributo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mandatorio') ? 'has-error' : ''}}">
                {!! Form::label('mandatorio', 'Mandatorio: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('mandatorio', \App\OpcionesCheckList::getENUM('mandatorio'), null, ['class' => 'form-control']) !!}

                    {!! $errors->first('mandatorio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
                {!! Form::label('tipo', 'Tipo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('tipo', \App\OpcionesCheckList::getENUM('tipo'), null, ['class' => 'form-control']) !!}

                    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
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