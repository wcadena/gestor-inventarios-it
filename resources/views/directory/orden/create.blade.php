@extends('layouts.master')


@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endsection

@section('contentheader_aqui', 'Orden')

@section('content')


    <h1>Create New Orden</h1>

    <hr/>



    {!! Form::open(['url' => 'orden', 'class' => 'form-horizontal']) !!}



                <div class="form-group {{ $errors->has('ordenCompra') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('ordenCompra', 'Orden de compra: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('ordenCompra', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ordenCompra', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_compra') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('fecha_compra', 'Fecha Compra: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('fecha_compra', null, ['class' => 'js-datepicker form-control','id'=>'fecha_compra']) !!}
                    {!! $errors->first('fecha_compra', '<p class="invalid-feedback">:message</p>') !!}
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

@section('js_after')
    <!-- Page JS  bootstrap datepicker -->
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function(){ Dashmix.helpers('datepicker'); });</script>

@endsection