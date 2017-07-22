@extends('layouts.master')

@section('content')

    <h1>Tecnico</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>User Id</th><th>Informe Manto Prev Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $tecnico->id }}</td> <td> {{ $tecnico->user_id }} </td><td> {{ $tecnico->informe_manto_prev_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection