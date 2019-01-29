@extends('layouts.app')

@section('main-content')


    <h1>Edit Usuario</h1>
    <hr/>

    {!! Form::model($usuario, [
        'method' => 'PATCH',
        'url' => ['usuario', $usuario->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
                {!! Form::label('first_name', 'First Name: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
                {!! Form::label('last_name', 'Last Name: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('rol') ? 'has-error' : ''}}">
                {!! Form::label('rol', 'Rol: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::select('rol', \App\User::getENUM('rol'), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('rol', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
    <div class="form-group {{ $errors->has('empresa') ? 'has-error' : ''}}">
        {!! Form::label('area_piso',trans('fo.empresa') , ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::select('empresa', $empresa, null, ['class' => 'form-control']) !!}
            {!! $errors->first('empresa', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

            <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                {!! Form::label('username', 'Username: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                {!! Form::label('password', 'Password: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

    <div class="form-group {{ $errors->has('custodio_id') ? 'has-error' : ''}}">
        {!! Form::label('custodio_id', 'Solicitante: ', ['class' => 'control-label']) !!}
        <div class="col-sm-4">
            {{ Form::select('custodio_id', \App\Custodios::all()->pluck('nombre_responsable','id'), null, ['class' => 'form-control']) }}
            {!! $errors->first('custodio_id', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-sm-2">
            <a href="{{ url('custodio/create') }}" class="btn btn-primary pull-right btn-sm">@lang('form.addnew') @lang('fo.Custodio')</a>
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

    <div class="list-group">
        @foreach( \App\Role::all() as $rol)
            <li class="list-group-item">{{($rol->display_name)}} @if($usuario->hasRole($rol->name))  @else @endif</li>
        @endforeach
    </div>

@endsection