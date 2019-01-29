@extends('layouts.master')



@section('content')



    <h1>Crear nuevo Empresa</h1>

    <hr/>



    {!! Form::open(['url' => 'empresa', 'class' => 'form-horizontal']) !!}



    @php( $campo = 'empresa' )
    <div class="form-group {{ $errors->has($campo) ? 'has-error' : ''}}">
        {!! Form::label($campo, trans('fo.'.$campo).':', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::text($campo, null, ['class' => 'form-control','id'=>$campo]) !!}
            {!! $errors->first($campo, '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    @php( $campo = 'formula_codigo' )
    <div class="form-group {{ $errors->has($campo) ? 'has-error' : ''}}">
        {!! Form::label($campo, trans('fo.'.$campo).':', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::text($campo, null, ['class' => 'form-control','id'=>$campo]) !!}
            {!! $errors->first($campo, '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group">

        <div class="col-sm-offset-3 col-sm-3">

            {!! Form::submit(trans('fo.Create'), ['class' => 'btn btn-primary form-control']) !!}

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
@endsection