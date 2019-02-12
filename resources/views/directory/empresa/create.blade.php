@extends('layouts.master')



@section('content')



    <h1>Crear nuevo Empresa</h1>

    <hr/>



    {!! Form::open(['url' => 'empresa', 'class' => 'form-horizontal']) !!}



    @php( $campo = 'empresa' )
    <div class="form-group {{ $errors->has($campo) ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label($campo, trans('fo.'.$campo).':', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::text($campo, null, ['class' => 'form-control','id'=>$campo]) !!}
            {!! $errors->first($campo, '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>


    @php( $campo = 'formula_codigo' )
    <div class="form-group {{ $errors->has($campo) ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label($campo, trans('fo.'.$campo).':', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::text($campo, null, ['class' => 'form-control','id'=>$campo]) !!}
            {!! $errors->first($campo, '<p class="invalid-feedback">:message</p>') !!}
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

