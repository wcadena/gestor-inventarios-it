@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            {{--@include('admin.sidebar')--}}

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">proyecto_seccion {{ $proyectoSeccion->id }}</div>
                    <div class="card-body">

                        <a href="{{ URL::route('proyecto.proyecto_seccion.index', ['proyecto' => $proyecto]) }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ URL::route('proyecto.proyecto_seccion.edit', ['proyecto_seccion' => $proyectoSeccion,'proyecto' => $proyecto]) }}" title="Edit proyecto_seccion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['proyecto_seccion', $proyectoSeccion->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Borrar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Borrar proyecto_seccion',
                                    'onclick'=>'return confirm("Confirma Borrar?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $proyectoSeccion->id }}</td>
                                    </tr>
                                    <tr><th> Proyecto Id </th><td> {{ $proyectoSeccion->proyecto_id }} </td></tr><tr><th> Name </th><td> {{ $proyectoSeccion->name }} </td></tr><tr><th> Descripcion </th><td> {{ $proyectoSeccion->descripcion }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
