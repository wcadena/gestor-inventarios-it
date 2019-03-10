@extends('layouts.master')

@section('content')

    <!-- Full Table -->
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">Ubicacion</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <a href="{{ url('ubicacion/create') }}" class="btn btn-hero-primary js-click-ripple-enabled"><i class="si si-plus"></i> Ubicacion</a>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                    <tr>
                        <th>S.No</th><th>Edificio</th><th>Estacione Id</th><th>Piso</th><th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $x=0; @endphp
                    @foreach($ubicacion as $item)
                        @php $x++;@endphp
                        <tr>
                            <td>{{ $x }}</td>
                            <td><a href="{{ url('ubicacion', $item->id) }}">{{ $item->estacionxc['estacion'] }}</a></td><td>{{ $item->edificio }}</td><td>{{ $item->piso }}</td>
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
            </div>
            <div class="pagination"> {!! $ubicacion->render() !!} </div>

        </div>
    </div>
    </div>
@endsection
