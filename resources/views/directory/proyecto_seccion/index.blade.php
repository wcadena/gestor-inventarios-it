@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            {{--@include('admin.sidebar')--}}

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Proyecto_seccion</div>
                    <div class="card-body">
                        <a href="{{ URL::route('proyecto.proyecto_seccion.create', ['proyecto' => $proyecto]) }}" class="btn btn-success btn-sm" title="Nuevo proyecto_seccion">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nuevo
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/proyecto_seccion', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Proyecto Id</th><th>Name</th><th>Descripcion</th><th>@lang('fo.Actions')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($proyecto_seccion as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->proyecto_id }}</td><td>{{ $item->name }}</td><td>{{ $item->descripcion }}</td>
                                        <td>
                                            <a href="{{ URL::route('proyecto.proyecto_seccion.show', ['proyecto' => $proyecto,'proyecto_seccion' =>$item]) }}" title="Ver proyecto_seccion"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('proyecto/'.$item->proyecto_id .'/proyecto_seccion/' . $item->id . '/edit') }}" title="Edit proyecto_seccion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'route' => array('proyecto.proyecto_seccion.destroy', $proyecto,$item),
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Borrar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete proyecto_seccion',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $proyecto_seccion->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
