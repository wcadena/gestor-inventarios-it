@extends('layouts.app')

@section('main-content')


    <h1>Motivo_denuncia</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre Denuncia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $motivo_denuncia->id }}</td> <td> {{ $motivo_denuncia->nombre_denuncia }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection