@extends('layouts.master')



@section('content')



    <h1>Crear nuevo Rol</h1>

    <hr/>



    {!! Form::open(['url' => 'roles', 'class' => 'form-horizontal']) !!}



    @php( $campo = 'rol' )
    <div class="form-group {{ $errors->has($campo) ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label($campo, trans('fo.'.title_case($campo)).':', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::text($campo, null, ['class' => 'form-control','id'=>$campo]) !!}
            {!! $errors->first($campo, '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>

    @php( $campo = 'descripcion' )
    <div class="form-group {{ $errors->has($campo) ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label($campo, trans('fo.'.title_case($campo)).':', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::text($campo, null, ['class' => 'form-control','id'=>$campo]) !!}
            {!! $errors->first($campo, '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>

    <h1>@lang('fo.Permisos')</h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>@lang('form.sno')</th>
                <th>@lang('fo.modulo')</th>
                <th>@lang('fo.permiso')</th>
                <th>@lang('form.codint')</th>

            </tr>
            </thead>
            <tbody>
            @php($x=0)

            @foreach($modulo as $item2)
                <tr>
                    <td colspan="2">Modulo</td>
                    <td colspan="3">{{$item2->modulo}}</td>
                </tr>

                @foreach($item2->permissions as $item)
                    @php($x++)
                    <tr>
                        <td>{{ $x }} | {{ Form::checkbox('permisos_r[]', $item->id, false) }}</td>
                        <td>{{$item2->modulo}}</td>
                        <td>{{ $item->permiso }}</td>
                        <td>{{ $item->descripcion }}</td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>

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