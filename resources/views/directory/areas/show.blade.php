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


    <div class="table">

        <table class="table table-bordered table-striped table-hover">

            <thead>

            <tr>

                <th>@lang('form.sno')</th><th>Modelo</th><th>Custodio</th><th>Estacione</th><th>Actions</th>

            </tr>

            </thead>

            <tbody>

            @php $x=0; @endphp
            @foreach($area->equiposxc as $item)

                @php $x++;@endphp

                <tr>

                    <td>{{ $x }}</td>

                    <td><a href="{{ url('equipos', $item->id) }}">{{ $item->modelo_equipoxc->modelo }}</a></td><td>{{ $item->custodioxc->nombre_responsable }}</td><td>{{ $item->estacionxc->estacion }}</td>

                    <td>

                        <a href="{{ url('equipos/' . $item->id . '/edit') }}">

                            <button type="submit" class="btn btn-sm btn-light m-1">@lang('form.update')</button>

                        </a> /

                        {!! Form::open([

                            'method'=>'DELETE',

                            'url' => ['equipos', $item->id],

                            'style' => 'display:inline'

                        ]) !!}

                        {!! Form::button(__('form.deletee'), ['class' => 'btn btn-sm btn-light m-1','type' => 'submit']) !!}

                        {!! Form::close() !!}

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>



    </div>



@endsection