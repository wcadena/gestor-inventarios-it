@extends('layouts.master')

@section('content')

    <h1>Create New Bitacora</h1>
    <hr/>

    {!! Form::open(['url' => 'bitacora', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
                {!! Form::label('titulo', 'Titulo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_ingreso') ? 'has-error' : ''}}">
                {!! Form::label('fecha_ingreso', 'Fecha Ingreso: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fecha_ingreso', null, ['class' => 'form-control','id'=>'fecha_ingreso']) !!}
                    {!! $errors->first('fecha_ingreso', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            {!! Form::hidden('id_equipos', $equipo_id, ['class' => 'form-control']) !!}
            <div class="form-group {{ $errors->has('custodio_id') ? 'has-error' : ''}}">
                {!! Form::label('custodio_id', 'Custodio Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('custodio_id', $dtos['custodio'], $custodio_id, ['class' => 'form-control']) !!}
                    {!! $errors->first('custodio_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
                {!! Form::label('user_id', 'User Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('user_id', $dtos['usuario'], $user_id, ['class' => 'form-control']) !!}
                    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('problema') ? 'has-error' : ''}}">
                {!! Form::label('problema', 'Problema: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('problema', null, ['class' => 'form-control ckeditor']) !!}
                    {!! $errors->first('problema', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            {!! Form::hidden('solucion', null, ['class' => 'form-control']) !!}
            <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                {!! Form::label('estado', 'Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('estado', \App\Bitacora::getENUM('estado'), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
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

@section('scripts')
    @include('layouts.partials.scripts')
    <script type="text/javascript">
        $(function () {
            $('#fecha_ingreso').datepicker({
              format: 'yyyy-mm-dd'
            });

        });
    </script>

@endsection