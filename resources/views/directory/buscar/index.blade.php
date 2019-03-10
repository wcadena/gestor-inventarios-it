@extends('layouts.master')


@section('contentheader_aqui', 'Busqueda')

@section('content')



    <h1>@lang('form.buscar')</h1>







    <fieldset>



    <div class="table">

        <table class="table table-bordered table-striped table-hover">

            <thead>

            <tr>

                <th>@lang('form.sno')</th><th>Fuente</th><th>Resultado de buqueda</th><th>Actions</th>

            </tr>

            </thead>

            <tbody>

            @php $x=0; @endphp

            @foreach($busqueda as $item)

                @php $x++;@endphp

                <tr>

                    <td>{{ $x }}</td>
                    @php
                    $linkrel="";
                    $linkhref="";
                    $datoaux=strtoupper((String)$item->instancia);
                   if($datoaux=="CUSTODIOS"){
                        $linkrel="Custodio";
                        $linkhref="custodio";
                    }
                    if($datoaux=="MODELOEQUIPO"){
                        $linkrel="Equipo";
                        $linkhref="equipos";

                    }
                    @endphp

                    <td><a href="{{ url($linkhref, $item->instancia_id) }}">{{ $item->instancia }}</a></td>
                    <td>{{ $item->dato }}</td>

                    <td>

                        <a href="{{ url($linkhref.'/' . $item->instancia_id. '/edit') }}">

                            <button type="submit" class="btn btn-primary btn-xs">@lang('form.update')</button>

                        </a> /

                        {!! Form::open([

                            'method'=>'DELETE',

                            'url' => [$linkhref, $item->instancia_id],

                            'style' => 'display:inline'

                        ]) !!}

                        {!! Form::submit(trans('form.deletee'), ['class' => 'btn btn-danger btn-xs']) !!}

                        {!! Form::close() !!}

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

        <div class="pagination"> {!! $busqueda->render() !!} </div>

    </div>

@endsection