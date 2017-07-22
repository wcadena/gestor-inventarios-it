@extends('layouts.master')

@section('content')

    <h1>Ubicacion</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Estacione Id</th><th>Edificio</th><th>Piso</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $ubicacion->id }}</td> <td> {{ $ubicacion->estacione_id }} </td><td> {{ $ubicacion->edificio }} </td><td> {{ $ubicacion->piso }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection