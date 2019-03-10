@extends('layouts.master')

@section('content')

    <h1>Create New Area</h1>
    <hr/>

    {!! Form::open(['url' => 'areas', 'class' => 'form-horizontal']) !!}

    <div class="form-group {{ $errors->has('area') ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label('area', 'Area: ', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::text('area', null, ['class' => 'form-control']) !!}
            {!! $errors->first('area', '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('empresa') ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label('empresa', trans('form.empresa'), ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::text('empresa', Auth::user()->empresa, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
            {!! $errors->first('empresa', '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>


    <div class="form-group">
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