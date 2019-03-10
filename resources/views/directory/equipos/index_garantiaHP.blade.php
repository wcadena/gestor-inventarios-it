@extends('layouts.master')

@section('htmlheader')

    @include('layouts.partials.htmlheader')

    <!-- Select2 -->

    <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet" type="text/css" />



@endsection



@section('contentheader_aqui', 'Equipos')

@section('content')



    <h1>@lang('form.equipos') Garantía</h1>


    <div class="table">

        <table class="table table-bordered table-striped table-hover">

            <thead>

            <tr>

                <th>@lang('form.sno')</th><th>Modelo</th><th>Custodio</th><th>Estacione</th><th>Garantía</th>

            </tr>

            </thead>

            <tbody>

            @php $x=0; @endphp

            @foreach($equipos as $item)

                @php $x++;@endphp

                <tr>

                    <td>{{ $x }}</td>

                    <td><a href="{{ url('equipos', $item->id) }}">{{ $item->modelo_equipoxc->modelo }}</a></td>
                    <td>{{ $item->custodioxc['nombre_responsable'] }}</td>
                    <td>{{ $item->estacionxc->estacion }}</td>

                    <td>{{$item->hp_endDate}}
                        <iframe src="{{ url('equipos', $item->id) }}"></iframe>
                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

        <div class="pagination"> {!! $equipos->render() !!} </div>

    </div>



@endsection

