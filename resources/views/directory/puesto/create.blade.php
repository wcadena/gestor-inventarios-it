@extends('layouts.master')



@section('content')



    <h1>Create New Puesto</h1>

    <hr/>



    {!! Form::open(['url' => 'puesto', 'class' => 'form-horizontal']) !!}



    @php( $campo = 'ubicacion_id' )
    <div class="form-group {{ $errors->has($campo) ? 'has-error' : ''}}">
        {!! Form::label($campo, $campo.':', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {{ Form::select($campo, \App\Ubicacion::all()->pluck('edificio','id'), null, ['class' => 'chosen-select form-control','id' => $campo ]) }}
            {!! $errors->first($campo, '<p class="help-block">:message</p>') !!}
        </div>
    </div>



    @php( $campo = 'codigo' )
    <div class="form-group {{ $errors->has($campo) ? 'has-error' : ''}}">
        {!! Form::label($campo, $campo.':', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text($campo, \App\Puesto::generarCodigo(), ['class' => 'form-control','id'=>$campo]) !!}
            {!! $errors->first($campo, '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    @php( $campo = 'detalle' )
    <div class="form-group {{ $errors->has($campo) ? 'has-error' : ''}}">
        {!! Form::label($campo, $campo.':', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text($campo, null, ['class' => 'form-control','id'=>$campo]) !!}
            {!! $errors->first($campo, '<p class="help-block">:message</p>') !!}
        </div>
    </div>



    @php( $campo = 'estado' )
    <div class="form-group {{ $errors->has($campo) ? 'has-error' : ''}}">
        {!! Form::label($campo, $campo.':', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {{ Form::select($campo, \App\Puesto::getENUM('estado'), null, ['class' => 'chosen-select form-control']) }}
            {!! $errors->first($campo, '<p class="help-block">:message</p>') !!}
        </div>
    </div>



    <div style="position: relative;">
        <img id="imagensampler2" src="{{env('APP_URL', 'http://localhost').'/img/perfil/'}}"
             style="position:relative;"/>
        <div id="aqui3" style="position: absolute; left: 0px; top: 0px;"><span class="glyphicon glyphicon-screenshot" style="color:red"></span></div>
    </div>



    @php( $campo = 'x' )

            {!! Form::text($campo, null, ['class' => 'form-control','id'=>$campo]) !!}
            {!! $errors->first($campo, '<p class="help-block">:message</p>') !!}

    @php( $campo = 'y' )

            {!! Form::text($campo, null, ['class' => 'form-control','id'=>$campo]) !!}
            {!! $errors->first($campo, '<p class="help-block">:message</p>') !!}


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
    <!-- bootstrap datepicker -->
    <script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('#fecha_compra').datepicker({
                format: 'yyyy-mm-dd'
            });

        });
    </script>
    <script type="text/javascript">
        function setImagen(){
            var ubicacion_id = $( "#ubicacion_id" ).val();

            $.get( "{{env('APP_URL', 'http://localhost')}}/imagenUbicacion?id="+ubicacion_id, function( data ) {
                $('#imagensampler2').attr('src','{{env('APP_URL', 'http://localhost').'/img/perfil/'}}'+data);
            });
        }
        $(function () {
            $( "#ubicacion_id" ).change(function() {
                setImagen();
            });
            setImagen();
        });
    </script>


    <script type="text/javascript">
        $(function () {
            $('#imagensampler2').click(function(e) {
                var offset = $(this).offset();

                var x = e.pageX - offset.left;
                var y = e.pageY - offset.top;
                $('#x').val(x);
                $('#y').val(y);

                $('#aqui3').attr('style','position: absolute; left: '+x+'px; top: '+y+'px');

            });
        });
    </script>



@endsection