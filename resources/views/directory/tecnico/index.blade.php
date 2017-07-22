@extends('layouts.master')

@section('content')

    <h1>Tecnico <a href="{{ url('tecnico/create') }}" class="btn btn-primary pull-right btn-sm">Add New Tecnico</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>User Id</th><th>Informe Manto Prev Id</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $x=0;?>
            @foreach($tecnico as $item)
                <?php $x++;?>
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('tecnico', $item->id) }}">{{ $item->userxc->name }}</a></td><td>{{ $item->InformeMantenimientoPreventivoxc->requerimiento }}</td>
                    <td>
                        <a href="{{ url('tecnico/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['tecnico', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $tecnico->render() !!} </div>
    </div>

@endsection
