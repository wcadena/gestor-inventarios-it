@extends('layouts.app')

@section('main-content')
    <h1>Edit Denuncia</h1>
    <hr/>

    {!! Form::model($denuncia, [
        'method' => 'PATCH',
        'url' => ['denuncias', $denuncia->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lugar') ? 'has-error' : ''}}">
                {!! Form::label('lugar', 'Lugar: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lugar', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lugar', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lat') ? 'has-error' : ''}}">
                {!! Form::label('lat', 'Lat: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lat', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lat', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lng') ? 'has-error' : ''}}">
                {!! Form::label('lng', 'Lng: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lng', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lng', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('motivo_den_id') ? 'has-error' : ''}}">
                {!! Form::label('motivo_den_id', 'Motivo Den Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('motivo_den_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('motivo_den_id', '<p class="help-block">:message</p>') !!}
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