@extends('layouts.master')

@section('content')


    <h1>Bitacora <a href="{{ url('bitacora/create') }}" class="btn btn-primary pull-right btn-sm">Add New Bitacora</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Titulo</th><th>Fecha Ingreso</th><th>Id Equipos</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @php $x=0; @endphp
            @foreach($bitacora as $item)
                @php $x++;@endphp
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('bitacora', $item->id) }}">{{ $item->titulo }}</a></td><td>{{ $item->fecha_ingreso }}</td><td>{{ $item->id_equipos }}</td>
                    <td>
                        <a href="{{ url('bitacora/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['bitacora', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $bitacora->render() !!} </div>
    </div>

@endsection
