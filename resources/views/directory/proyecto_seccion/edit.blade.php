@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{--@include('admin.sidebar')--}}

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Editar proyecto_seccion #{{ $proyecto_seccion->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/proyecto_seccion') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($proyecto_seccion, [
                            'method' => 'PATCH',
                            'url' => ['/proyecto_seccion', $proyecto_seccion->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('directory.proyecto_seccion.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
