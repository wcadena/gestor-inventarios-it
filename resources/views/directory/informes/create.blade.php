@extends('layouts.master')


@section('css_before')
    <link href="{{ asset('js/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('contentheader_aqui', 'Equipos')

@section('content')

    <h1>Crear nuevo Informe</h1>
    <hr/>

    {!! Form::open(['url' => 'informes', 'class' => 'form-horizontal']) !!}

    <div class="form-group {{ $errors->has('area_id') ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label('informe_proyectos_seccions_inf', 'Seccion: ', ['class' => 'control-label']) !!}
        <div class="ekihk">
            <select id="informe_proyectos_seccions_inf"
                    name="informe_proyectos_seccions_inf[]"
                    class="chosen-select form-control"
                    multiple="multiple">
                <option value="---" selected>General</option>
                @foreach(\App\Proyecto::all() as $proyecto)
                    @if($proyecto->count()>0)
                        <optgroup label="{{$proyecto->name}}">
                            @foreach($proyecto->proyectoSeccions as $seccions)
                                @if($seccions->tipo == 'seccion')
                                    <option value="{{$seccions->id}}">{{$seccions->name}}</option>
                                @endif
                            @endforeach
                        </optgroup>
                    @endif
                @endforeach
            </select>

            {!! $errors->first('area_id', '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('requerimiento') ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label('requerimiento', 'Titulo Requerimiento: ', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::text('requerimiento', null, ['class' => 'form-control']) !!}
            {!! $errors->first('requerimiento', '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('custodio_id') ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label('custodio_id', 'Solicitante: ', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {{ Form::select('custodio_id', $custodios, (isset(Auth::user()->custodio))?Auth::user()->custodio->id:null, ['class' => 'form-control']) }}
            {!! $errors->first('custodio_id', '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('area_id') ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label('area_id', 'Area Id: ', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {{ Form::select('area_id', $areas, null, ['class' => 'form-control']) }}
            {!! $errors->first('area_id', '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('fecha_solicitud') ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label('fecha_solicitud', 'Fecha Solicitud: ', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::date('fecha_solicitud', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
            {!! $errors->first('fecha_solicitud', '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('informe_manto_prev_cate_id') ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label('informe_manto_prev_cate_id', 'Categoria: ', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {{ Form::select('informe_manto_prev_cate_id', $categoria_mant, null, ['class' => 'form-control']) }}
            {!! $errors->first('informe_manto_prev_cate_id', '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('observacion') ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label('observacion', 'Descripción : ', ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}
            {!! $errors->first('observacion', '<p class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    {!! Form::hidden('solucion', ' ', ['class' => 'form-control']) !!}
    {!! Form::hidden('resolucion', ' ', ['class' => 'form-control']) !!}
    @php $vinculo_global_info = Webpatser\Uuid\Uuid::generate();@endphp
    {!! Form::hidden('vinculo',$vinculo_global_info ) !!}
    <div class="form-group {{ $errors->has('tecnicos') ? ' form-control-alt is-invalid' : ''}}">
        {!! Form::label('tecnico', trans('fo.Tecnicos'), ['class' => 'control-label']) !!}
        <div class="ekihk">
            {!! $errors->first('tecnicos', '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> :message
</div>') !!}
            <div class="table {{ $errors->has('tecnicos') ? ' form-control-alt is-invalid' : ''}}">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>@lang('form.sno')</th>
                        <th>@lang('form.name')</th>
                    </thead>
                    <tbody>
                    @php $x=0; @endphp

                    @foreach(\App\Role::where('name','tecnico')->first()->users as $item)
                        @php $x++;@endphp
                        <tr>
                            <td>{{ Form::checkbox('tecnicos[]', $item->id, false) }}</td>
                            <td>{{ $item->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add files</div>

                    <div class="card-body">
                        <upload-files :input_name="'users[]'" :post_url="'files/upload-file'"  :imageable_type="'informes'"  :vinculo_padre="'{{$vinculo_global_info}}'"></upload-files>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/select2/js/select2.min.js') }}"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function(){ Dashmix.helpers('select2'); });</script>

    <script>

      $(function () {
        $.fn.select2.defaults.set("theme", "classic");
        $('#informe_proyectos_seccions_inf').select2({
          multiple: true,
          language: "es",
          placeholder: "Select Avianca Code",
          tags: true,
        });
      });
    </script>

@endsection