@extends('layouts.app')

@section('main-content')


    <h1>Create New Motivo_denuncia</h1>
    <hr/>

    {!! Form::open(['url' => 'motivo_denuncias', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nombre_denuncia') ? 'has-error' : ''}}">
                {!! Form::label('nombre_denuncia', 'Nombre Denuncia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre_denuncia', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombre_denuncia', '<p class="help-block">:message</p>') !!}
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