@extends('layouts.master')

@section('content')

    <h1>Ubicacion</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Estacione Id</th><th>Edificio</th><th>Piso</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $ubicacion->id }}</td> <td> {{ $ubicacion->estacione_id }} </td><td> {{ $ubicacion->edificio }} </td><td> {{ $ubicacion->piso }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

    <div style="position: relative;">
        <img  src="{{env('APP_URL', 'http://localhost').'/img/perfil/'.$ubicacion->imagen}}"
              style="position:relative;"/>
        @foreach($ubicacion->puestosxc as $puesto )
            <a href="{{ url('puesto/' . $puesto->id . '/edit') }}">
                <div id="aqui3" style="position: absolute; left: {{$puesto->x}}px; top: {{$puesto->y}}px;"><span class="glyphicon glyphicon-screenshot" style="color:red"></span></div>
            </a>
        @endforeach
    </div>


@endsection