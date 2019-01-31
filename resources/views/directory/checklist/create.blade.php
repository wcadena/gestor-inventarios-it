@extends('layouts.master')

@section('content')

    <h1>Create New Checklist</h1>
    <hr/>

    {!! Form::open(['url' => 'checklist', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('area_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('area_id', trans('form.ai3e'), ['class' => 'control-label']) !!}
                <div class="ekihk">

                    {!! Form::select('area_id', $dts[0], null, ['class' => 'form-control']) !!}
                    {!! $errors->first('area_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('user_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('user_id', trans('form.usid23'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::select('user_id', $dts[1], Auth::id(), ['class' => 'form-control']) !!}
                    {!! $errors->first('user_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('id_check_lists') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('id_check_lists', 'Id Check Lists: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('id_check_lists', uniqid('CHK-'), ['class' => 'form-control']) !!}
                    {!! $errors->first('id_check_lists', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('unik_check_lists') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('unik_check_lists', 'Unik Check Lists: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('unik_check_lists', Uuid::generate(), ['class' => 'form-control']) !!}
                    {!! $errors->first('unik_check_lists', '<p class="invalid-feedback">:message</p>') !!}
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