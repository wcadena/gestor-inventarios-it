@extends('layouts.master')

@section('content')

    <h1>Config</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Estacione Id</th><th>Edificio</th><th>Piso</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $config->id }}</td> <td> {{ $config->estacione_id }} </td><td> {{ $config->edificio }} </td><td> {{ $config->piso }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection