@extends('layouts.master')

@section('content')

    <h1>Edit Checklist_opcionescheck</h1>
    <hr/>

    {!! Form::model($checklist_opcionescheck, [
        'method' => 'PATCH',
        'url' => ['checklist_opcionescheck', $checklist_opcionescheck->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('check_list_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('check_list_id', trans('form.clid32'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::number('check_list_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('check_list_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('opciones_check_list_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('opciones_check_list_id', 'Opciones Check List Id: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::number('opciones_check_list_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('opciones_check_list_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valor1') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('valor1', 'Valor1: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('valor1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('valor1', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valor2') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('valor2', 'Valor2: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('valor2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('valor2', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valor3') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('valor3', 'Valor3: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('valor3', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('valor3', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valor4') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('valor4', 'Valor4: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('valor4', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('valor4', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::button(__('<i class="fa fa-fw fa-save mr-1"></i> '.trans('form.update')), ['class' => 'btn btn-block btn-hero-primary','type' => 'submit']) !!}
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