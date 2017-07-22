@extends('layouts.app')

@section('main-content')


    <h1>Usuario</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>First Name</th><th>Last Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $usuario->id }}</td> <td> {{ $usuario->name }} </td><td> {{ $usuario->first_name }} </td><td> {{ $usuario->last_name }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection