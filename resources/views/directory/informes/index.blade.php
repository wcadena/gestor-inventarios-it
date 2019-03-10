@extends('layouts.master')

@section('content')

    <!-- Full Table -->
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">Informes</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <a href="{{ url('informes/create') }}" class="btn btn-hero-primary js-click-ripple-enabled"><i class="si si-plus"></i> Informes</a>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                    <tr>
                        <th>S.No</th><th>Solicitante</th><th>Area</th><th>Requerimiento</th><th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $x=0; @endphp
                    @foreach($informes as $item)
                        @php $x++;@endphp
                        <tr>
                            <td>{{ $x }}</td>
                            <td>
                                <a href="{{ url('informes', $item->id) }}">
                                    {{ $item->custodioxc->nombre_responsable }}
                                </a>
                            </td>
                            <td>{{ $item->areaxc->area }}</td><td>{{ $item->requerimiento }}</td>
                            <td>
                                <a href="{{ url('informes/' . $item->id . '/edit') }}">
                                    <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                </a> /
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['informes', $item->id],
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
            <div class="pagination"> {!! $informes->render() !!} </div>
        </div>
    </div>



@endsection
