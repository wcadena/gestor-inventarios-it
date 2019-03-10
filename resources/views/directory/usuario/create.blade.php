@extends('layouts.backend')

@section('main-content')


    <h1>Create New Usuario</h1>
    <hr/>

    {!! Form::open(['url' => 'usuario', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('name') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('first_name') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('first_name', 'First Name: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('first_name', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('last_name') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('last_name', 'Last Name: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('last_name', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('rol') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('rol', 'Rol: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::select('rol', \App\User::getENUM('rol'), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('rol', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('empresa') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('area_piso',trans('fo.empresa') , ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::select('empresa', $empresa, null, ['class' => 'form-control']) !!}
                    {!! $errors->first('empresa', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('username') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('username', 'Username: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('username', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('email', 'Email: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('password') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('password', 'Password: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    {!! $errors->first('password', '<p class="invalid-feedback">:message</p>') !!}
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