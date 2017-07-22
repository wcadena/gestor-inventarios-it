@extends('layouts.master')

@section('content')

    <h1>Informe</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Custodio Id</th><th>Area Id</th><th>No Orden</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $informe->id }}</td> <td> {{ $informe->custodio_id }} </td><td> {{ $informe->area_id }} </td><td> {{ $informe->no_orden }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection