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
    <svg id="imagensampler3" width="100%" height="100%" fill="url(#image)" style="border: solid 1px red">
        <defs>
            <pattern id="imagensampler4" patternUnits="userSpaceOnUse" >
                <image id="imagensampler4im" x="0" y="0" xlink:href="http://inventario3.aerogal.dev/img/perfil/BVP7GgSAGD2kCtpXZNZgTjWOowHTpe2RIfsvBkme.png"></image>
            </pattern>
        </defs>
        <rect  id="imagensampler5" width="100%" height="100%" fill="url(#imagensampler4)" />
    </svg>



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
    <script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
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
                //$('#imagensampler2').attr('src','{{env('APP_URL', 'http://localhost').'/img/perfil/'}}'+data);

                $('#imagensampler4im').attr('href','{{env('APP_URL', 'http://localhost').'/img/perfil/'}}'+data);


                var offset = $('#imagensampler5').offset();
                var x = offset.left;
                var y = offset.top;

                $('#imagensampler3').attr('width',x);
                $('#imagensampler3').attr('height',y);

                $('#imagensampler4').attr('width',x);
                $('#imagensampler4').attr('height',y);


                $('#imagensampler4im').attr('width',x);
                $('#imagensampler4im').attr('height',y);

                //$('#imagensampler5').attr('width',x);
                //$('#imagensampler5').attr('height',y);

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
            $('#imagensampler5').click(function(e) {
                var offset = $(this).offset();
                $('#x').val(e.pageX - offset.left);
                $('#y').val(e.pageY - offset.top);
            });
        });
    </script>



@endsection