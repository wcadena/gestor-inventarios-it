@extends('layouts.master')

@section('content')

    <h1>Estacione</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre Largo</th><th>Pais</th><th>Estacion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $estacione->id }}</td> <td> {{ $estacione->nombre_largo }} </td><td> {{ $estacione->pais }} </td><td> {{ $estacione->estacion }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection