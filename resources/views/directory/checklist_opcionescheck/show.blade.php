@extends('layouts.master')

@section('content')

    <h1>Checklist_opcionescheck</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Check List Id</th><th>Opciones Check List Id</th><th>Valor1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $checklist_opcionescheck->id }}</td> <td> {{ $checklist_opcionescheck->check_list_id }} </td><td> {{ $checklist_opcionescheck->opciones_check_list_id }} </td><td> {{ $checklist_opcionescheck->valor1 }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection