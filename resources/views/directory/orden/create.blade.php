@extends('layouts.master')



@section('content')



    <h1>Create New Orden</h1>

    <hr/>



    {!! Form::open(['url' => 'orden', 'class' => 'form-horizontal']) !!}



                <div class="form-group {{ $errors->has('ordenCompra') ? 'has-error' : ''}}">
                {!! Form::label('ordenCompra', 'Orden de compra: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ordenCompra', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ordenCompra', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_compra') ? 'has-error' : ''}}">
                {!! Form::label('fecha_compra', 'Fecha Compra: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fecha_compra', null, ['class' => 'form-control','id'=>'fecha_compra']) !!}
                    {!! $errors->first('fecha_compra', '<p class="help-block">:message</p>') !!}
                </div>
            </div>




    <div class="form-group">

        <div class="col-sm-offset-3 col-sm-3">

            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}

        </div>

    </div>

    {!! Form::close() !!}



    @if ($errors->any())

        <ul class="alert alert-danger">

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    @endif



@endsection

@section('scripts')
    @include('layouts.partials.scripts')
    <script type="text/javascript">
        $(function () {
            $('#fecha_compra').datepicker({
                format: 'yyyy-mm-dd'
            });

        });
    </script>

@endsection