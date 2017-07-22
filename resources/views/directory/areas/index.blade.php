@extends('layouts.master')

@section('content')

    <h1>Areas <a href="{{ url('areas/create') }}" class="btn btn-primary pull-right btn-sm">Add New Area</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Area</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @php $x=0; @endphp
            @foreach($areas as $item)
                @php $x++;@endphp
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('areas', $item->id) }}">{{ $item->area }}</a></td>
                    <td>
                        <a href="{{ url('areas/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['areas', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $areas->render() !!} </div>
    </div>

@endsection
