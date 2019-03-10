@extends('layouts.app')

@section('main-content')

    <h1>Arbol</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre Comun</th><th>Nombre Cientifico</th><th>Patrimonial</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $arbol->id }}</td> <td> {{ $arbol->nombre_comun }} </td><td> {{ $arbol->nombre_cientifico }} </td><td> {{ $arbol->patrimonial }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection