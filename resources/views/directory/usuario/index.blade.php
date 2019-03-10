@extends('layouts.master')

@section('contentheader_aqui', 'Usuarios')

@section('content')

    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">Usuario</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <a href="{{ url('usuario/create') }}" class="btn btn-hero-primary js-click-ripple-enabled"><i class="si si-plus"></i> Usuario</a>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="table-responsive">



                <table class="table table-bordered table-striped table-hover">

                    <thead>

                    <tr>

                        <th>@lang('form.sno')</th><th>Name</th><th>First Name</th><th>Last Name</th><th>Actions</th>

                    </tr>

                    </thead>

                    <tbody>

                    @php $x=0; @endphp

                    @foreach($usuario as $item)

                        @php $x++;@endphp

                        <tr>

                            <td>{{ $x }}</td>

                            <td><a href="{{ url('usuario', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->first_name }}</td><td>{{ $item->last_name }}</td>

                            <td>

                                <a href="{{ url('usuario/' . $item->id . '/edit') }}">

                                    <button type="submit" class="btn btn-sm btn-light m-1">@lang('form.update')</button>


                                </a> /

                                {!! Form::open([

                                    'method'=>'DELETE',

                                    'url' => ['usuario', $item->id],

                                    'style' => 'display:inline'

                                ]) !!}

                                {!! Form::button(__('form.deletee'), ['class' => 'btn btn-sm btn-light m-1','type' => 'submit']) !!}

                                {!! Form::close() !!}

                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

                <div class="pagination"> {!! $usuario->render() !!} </div>

            </div>
        </div>
    </div>



@endsection

