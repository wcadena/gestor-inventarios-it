@extends('layouts.master')

@section('content')

    <h1>Bitacora</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Titulo</th><th>Fecha Ingreso</th><th>Id Equipos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $bitacora->id }}</td> <td> {{ $bitacora->titulo }} </td><td> {{ $bitacora->fecha_ingreso }} </td><td> {{ $bitacora->id_equipos }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection