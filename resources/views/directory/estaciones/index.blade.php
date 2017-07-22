@extends('layouts.master')

@section('content')

    <h1>Estaciones <a href="{{ url('estaciones/create') }}" class="btn btn-primary pull-right btn-sm">Add New Estacione</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre Largo</th><th>Pais</th><th>Estacion</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @php $x=0; @endphp
            @foreach($estaciones as $item)
                @php $x++;@endphp
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('estaciones', $item->id) }}">{{ $item->nombre_largo }}</a></td><td>{{ $item->pais }}</td><td>{{ $item->estacion }}</td>
                    <td>
                        <a href="{{ url('estaciones/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['estaciones', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $estaciones->render() !!} </div>
    </div>

@endsection
