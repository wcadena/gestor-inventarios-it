@extends('layouts.master')

@section('content')

    <h1>Area</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Area</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $area->id }}</td> <td> {{ $area->area }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection