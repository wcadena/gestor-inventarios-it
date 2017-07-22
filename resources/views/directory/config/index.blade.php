@extends('layouts.master')

@section('content')

    <h1>Config <a href="{{ url('config/create') }}" class="btn btn-primary pull-right btn-sm">Add New Config</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Estacione Id</th><th>Edificio</th><th>Piso</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @php $x=0; @endphp
            @foreach($config as $item)
                @php $x++;@endphp
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('config', $item->id) }}">{{ $item->estacione_id }}</a></td><td>{{ $item->edificio }}</td><td>{{ $item->piso }}</td>
                    <td>
                        <a href="{{ url('config/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['config', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $config->render() !!} </div>
    </div>

@endsection
