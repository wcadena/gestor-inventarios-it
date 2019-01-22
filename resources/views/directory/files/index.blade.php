@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Files <a href="{{ url('files/create') }}" class="btn btn-info">Add files</a> </div>

                    <div class="card-body">
                        @if($files->count())
                            <table class="table">
                                <th>Name</th>
                                <th>Size</th>
                                @foreach($files as $file)
                                    <tr>
                                        <td>{{ $file->filename }}</td>
                                        <td>{{ $file->size }} Bytes</td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            You have no files yet!
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection