@extends('layouts.master')

@section('content')

    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">@lang('fo.Estaciones') </h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <a href="{{ url('estaciones/create') }}" class="btn btn-hero-primary js-click-ripple-enabled"><i class="si si-plus"></i> @lang('fo.Estaciones') </a>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>@lang('form.sno')</th><th>@lang('fo.Nombre Largo')</th><th>@lang('fo.Pais')</th><th>@lang('fo.Estaciones')</th><th>@lang('fo.Actions')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $x=0; @endphp
                    @foreach($estaciones as $item)
                        @php $x++;@endphp
                        <tr>
                            <td>{{ $x }}</td>
                            <td><a href="{{ url('estaciones', $item->id) }}">{{ $item->nombre_largo }}</a></td><td>{{ $item->pais }}</td><td>{{ $item->estacion }}</td>
                            <td>
                                <a href="{{ url('estaciones/' . $item->id . '/edit') }}">
                                    <button type="submit" class="btn btn-primary btn-xs">@lang('fo.Update')</button>
                                </a> /
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['estaciones', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                {!! Form::submit(trans('fo.Delete'), ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination"> {!! $estaciones->render() !!} </div>
            </div>
        </div>
    </div>

@endsection
