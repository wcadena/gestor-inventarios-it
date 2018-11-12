@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @{{--@include('admin.sidebar')--}}

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Crear Nuevo proyecto_seccion</div>
                    <div class="card-body">
                        <a href="{{ URL::route('proyecto_seccion.index', ['proyecto_id' => $proyecto_id]) }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/proyecto_seccion', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('directory.proyecto_seccion.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
