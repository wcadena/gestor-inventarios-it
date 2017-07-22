@extends('layouts.master')

@section('content')

    <h1>Create New Tecnico</h1>
    <hr/>

    {!! Form::open(['url' => 'tecnico', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
                {!! Form::label('user_id', 'User Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select('user_id', $tecnico, null, ['class' => 'form-control']) }}
                    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('informe_manto_prev_id') ? 'has-error' : ''}}">
                {!! Form::label('informe_manto_prev_id', 'Informe Manto Prev Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('informe_manto_prev_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('informe_manto_prev_id', '<p class="help-block">:message</p>') !!}
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