@extends('layouts.master')

@section('content')

    <h1>Crear nueva Bitácora</h1>
    <hr/>

    {!! Form::open(['url' => 'bitacora', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('titulo') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('titulo', 'Título: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('titulo', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_ingreso') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('fecha_ingreso', 'Fecha Ingreso: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('fecha_ingreso', null, ['class' => 'form-control','id'=>'fecha_ingreso']) !!}
                    {!! $errors->first('fecha_ingreso', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            {!! Form::hidden('id_equipos', $equipo_id, ['class' => 'form-control']) !!}
            <div class="form-group {{ $errors->has('custodio_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('custodio_id', 'Custodio: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::select('custodio_id', $dtos['custodio'], $custodio_id, ['class' => 'form-control']) !!}
                    {!! $errors->first('custodio_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('user_id') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('user_id', 'Usuario: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::select('user_id', $dtos['usuario'], $user_id, ['class' => 'form-control']) !!}
                    {!! $errors->first('user_id', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('problema') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('problema', 'Problema: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::textarea('problema', null, ['class' => 'form-control ckeditor']) !!}
                    {!! $errors->first('problema', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            {!! Form::hidden('solucion', null, ['class' => 'form-control']) !!}
            <div class="form-group {{ $errors->has('estado') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('estado', 'Estado: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::select('estado', \App\Bitacora::getENUM('estado'), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estado', '<p class="invalid-feedback">:message</p>') !!}
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

@section('scripts')
    @include('layouts.partials.scripts')
    <!-- bootstrap datepicker -->
    <script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.min.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            $('#fecha_ingreso').datepicker({
              format: 'yyyy-mm-dd'
            });

        });
    </script>

@endsection