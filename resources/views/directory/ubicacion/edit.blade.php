@extends('layouts.master')

@section('content')

    <h1>Edit Ubicacion</h1>
    <hr/>

    {!! Form::model($ubicacion, [
        'method' => 'PATCH',
        'url' => ['ubicacion', $ubicacion->id],
        'class' => 'form-horizontal',
        'enctype'=>"multipart/form-data"
    ]) !!}




            @php( $campo = 'estacione_id' )
            <div class="form-group {{ $errors->has($campo) ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label($campo, $campo.':', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {{ Form::select($campo,  \App\Estaciones::all()->pluck('estacion','id'), null, ['class' => 'chosen-select form-control']) }}
                    {!! $errors->first($campo, '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('edificio') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('edificio', 'Edificio: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('edificio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('edificio', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('piso') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('piso', 'Piso: ', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('piso', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('piso', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            @php( $campo = 'area_id' )
            <div class="form-group {{ $errors->has($campo) ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label($campo, $campo.':', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {{ Form::select($campo,  \App\Areas::all()->pluck('area','id'), null, ['class' => 'chosen-select form-control']) }}
                    {!! $errors->first($campo, '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>

            @php( $campo = 'imagen' )
            <div class="form-group {{ $errors->has($campo) ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label($campo, $campo.':', ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::file($campo, null, ['class' => 'form-control','id'=>$campo]) !!}
                    {!! $errors->first($campo, '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>



    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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