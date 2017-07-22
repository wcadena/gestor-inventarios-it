@extends('layouts.master')

@section('content')

    <h1>Ubicacion <a href="{{ url('ubicacion/create') }}" class="btn btn-primary pull-right btn-sm">Add New Ubicacion</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Estacione Id</th><th>Edificio</th><th>Piso</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @php $x=0; @endphp
            @foreach($ubicacion as $item)
                @php $x++;@endphp
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('ubicacion', $item->id) }}">{{ $item->estacione_id }}</a></td><td>{{ $item->edificio }}</td><td>{{ $item->piso }}</td>
                    <td>
                        <a href="{{ url('ubicacion/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['ubicacion', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $ubicacion->render() !!} </div>
    </div>

@endsection
