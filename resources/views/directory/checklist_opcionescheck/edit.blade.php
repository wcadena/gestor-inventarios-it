@extends('layouts.master')

@section('content')

    <h1>Edit Checklist_opcionescheck</h1>
    <hr/>

    {!! Form::model($checklist_opcionescheck, [
        'method' => 'PATCH',
        'url' => ['checklist_opcionescheck', $checklist_opcionescheck->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('check_list_id') ? 'has-error' : ''}}">
                {!! Form::label('check_list_id', trans('form.clid32'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('check_list_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('check_list_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('opciones_check_list_id') ? 'has-error' : ''}}">
                {!! Form::label('opciones_check_list_id', 'Opciones Check List Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('opciones_check_list_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('opciones_check_list_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valor1') ? 'has-error' : ''}}">
                {!! Form::label('valor1', 'Valor1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('valor1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('valor1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valor2') ? 'has-error' : ''}}">
                {!! Form::label('valor2', 'Valor2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('valor2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('valor2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valor3') ? 'has-error' : ''}}">
                {!! Form::label('valor3', 'Valor3: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('valor3', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('valor3', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valor4') ? 'has-error' : ''}}">
                {!! Form::label('valor4', 'Valor4: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('valor4', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('valor4', '<p class="help-block">:message</p>') !!}
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