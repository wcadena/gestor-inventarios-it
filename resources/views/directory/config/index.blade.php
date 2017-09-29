@extends('layouts.master')

@section('content')

    <h1>@lang('fo.Config')<a href="{{ url('config/create') }}" class="btn btn-primary pull-right btn-sm">@lang('fo.Add New Config')</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>@lang('form.sno')</th><th>@lang('fo.Atributo')</th><th>@lang('fo.Tipo')</th><th>@lang('fo.Valor')</th><th>@lang('fo.Actions')</th>
                </tr>
            </thead>
            <tbody>
            @php $x=0; @endphp
            @foreach($config as $item)
                @php $x++;@endphp
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('config', $item->id) }}">{{ $item->atributo }}</a></td><td>{{ $item->tipo }}</td><td>{{ $item->valor }}</td>
                    <td>
                        <a href="{{ url('config/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">@lang('fo.Update')</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['config', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit(trans('fo.Delete'), ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $config->render() !!} </div>
    </div>

@endsection
