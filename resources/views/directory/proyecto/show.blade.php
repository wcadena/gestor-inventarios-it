@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{--@include('admin.sidebar')--}}

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">proyecto {{ $proyecto->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/proyecto') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/proyecto/' . $proyecto->id . '/edit') }}" title="Edit proyecto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['proyecto', $proyecto->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Borrar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Borrar proyecto',
                                    'onclick'=>'return confirm("Confirma Borrar?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $proyecto->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $proyecto->name }} </td></tr><tr><th> Descripcion </th><td> {{ $proyecto->descripcion }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <a href="{{ URL::route('proyecto.proyecto_seccion.index', ['proyecto' => $proyecto]) }}"
                   title="Secciones del proyecto" class="btn btn-success btn-sm"><i aria-hidden="true" class="fa fa-book"></i> Secciones
                </a>
            </div>
        </div>
    </div>
@endsection
