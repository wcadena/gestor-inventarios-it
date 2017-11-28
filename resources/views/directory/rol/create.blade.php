@extends('layouts.master')



@section('content')



    <h1>Crear nuevo Rol</h1>

    <hr/>



    {!! Form::open(['url' => 'roles', 'class' => 'form-horizontal']) !!}



    @php( $campo = 'rol' )
    <div class="form-group {{ $errors->has($campo) ? 'has-error' : ''}}">
        {!! Form::label($campo, trans('fo   '.$campo).':', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text($campo, null, ['class' => 'form-control','id'=>$campo]) !!}
            {!! $errors->first($campo, '<p class="help-block">:message</p>') !!}
        </div>
    </div>



    @php( $campo = 'descripcion' )
    <div class="form-group {{ $errors->has($campo) ? 'has-error' : ''}}">
        {!! Form::label($campo, $campo.':', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text($campo, null, ['class' => 'form-control','id'=>$campo]) !!}
            {!! $errors->first($campo, '<p class="help-block">:message</p>') !!}
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
    <!-- bootstrap datepicker -->
@endsection