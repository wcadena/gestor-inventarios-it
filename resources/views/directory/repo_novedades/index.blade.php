@extends('layouts.master')

@section('content')

    <h1>Repo_novedades <a href="{{ url('repo_novedades/create') }}" class="btn btn-primary pull-right btn-sm">Add New Repo_novedade</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Custodio Id</th><th>Correo</th><th>Fecha Novedades</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @php $x=0; @endphp
            @foreach($repo_novedades as $item)
                @php $x++;@endphp
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('repo_novedades', $item->id) }}">{{ $item->custodio_id }}</a></td><td>{{ $item->correo }}</td><td>{{ $item->fecha_novedades }}</td>
                    <td>
                        <a href="{{ url('repo_novedades/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['repo_novedades', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $repo_novedades->render() !!} </div>
    </div>

@endsection
