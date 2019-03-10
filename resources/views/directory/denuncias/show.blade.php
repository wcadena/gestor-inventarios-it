@extends('layouts.app')

@section('main-content')

    <h1>Denuncia</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Descripcion</th><th>Lugar</th><th>Lat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $denuncia->id }}</td> <td> {{ $denuncia->descripcion }} </td><td> {{ $denuncia->lugar }} </td><td> {{ $denuncia->lat }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection