@extends('layouts.master')



@section('content')



    <h1>@lang('fo.create_new_custodio')</h1>

    <hr/>



    {!! Form::open(['url' => 'custodio', 'class' => 'form-horizontal']) !!}



                <div class="form-group {{ $errors->has('nombre_responsable') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('nombre_responsable', trans('fo.nombre_responsable'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('nombre_responsable', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombre_responsable', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ciudad') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('ciudad',trans('fo.ciudad') , ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ciudad', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('direccion') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('direccion', trans('fo.direccion'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('direccion', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area_piso') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('area_piso',trans('fo.area_piso') , ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::select('area_piso', $areas, null, ['class' => 'chosen-select form-control']) !!}
                    {!! $errors->first('area_piso', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('documentoIdentificacion') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('documentoIdentificacion', trans('fo.documentoIdentificacion'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('documentoIdentificacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('documentoIdentificacion', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cargo') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('cargo', trans('fo.cargo'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('cargo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cargo', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('compania') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('compania', trans('fo.compania'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('compania', Auth::user()->empresa, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
                    {!! $errors->first('compania', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('telefono') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('telefono', trans('fo.telefono'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('telefono', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('email', trans('fo.email'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="invalid-feedback">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estado') ? ' form-control-alt is-invalid' : ''}}">
                {!! Form::label('estado', trans('fo.estado'), ['class' => 'control-label']) !!}
                <div class="ekihk">
                    <?php echo Form::select('estado', \App\Custodios::getENUM('estado'), null, ['class' => 'form-control']); ?>
                    {!! $errors->first('estado', '<p class="invalid-feedback">:message</p>') !!}
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