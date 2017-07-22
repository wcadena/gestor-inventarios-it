@extends('layouts.master')

@section('content')

    <h1>Opciones_check</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Area Id</th><th>Atributo</th><th>Mandatorio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $opciones_check->id }}</td> <td> {{ $opciones_check->area_id }} </td><td> {{ $opciones_check->atributo }} </td><td> {{ $opciones_check->mandatorio }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection