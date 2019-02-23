@extends('layouts.master')


@section('css_before')
    <link href="{{ asset('js/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('js/plugins/dropzone/dist/min/dropzone.min.css')}}">
@endsection

@section('contentheader_aqui', 'Equipos')

@section('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Crear nuevo Informe</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Informe</li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Elements -->
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title">Equipos</h3>
            </div>
            <div class="block-content">

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
{{--tecnicos ini--}}
                <div class="form-group row items-push mb-0">
                    <div class="col-md-6 col-xl-4">
                        <div class="custom-control custom-block custom-control-primary">
                            <input type="checkbox" class="custom-control-input" id="dm-project-new-people-1" name="dm-project-new-people-1">
                            <label class="custom-control-label" for="dm-project-new-people-1">
                                                        <span class="d-flex align-items-center">
                                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                                                            <span class="ml-2">
                                                                <span class="font-w700">Judy Ford</span>
                                                                <span class="d-block font-size-sm text-muted">Web Designer</span>
                                                            </span>
                                                        </span>
                            </label>
                            <span class="custom-block-indicator">
                                                        <i class="fa fa-check"></i>
                                                    </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="custom-control custom-block custom-control-primary">
                            <input type="checkbox" class="custom-control-input" id="dm-project-new-people-2" name="dm-project-new-people-2">
                            <label class="custom-control-label" for="dm-project-new-people-2">
                                                        <span class="d-flex align-items-center">
                                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar9.jpg" alt="">
                                                            <span class="ml-2">
                                                                <span class="font-w700">Jack Estrada</span>
                                                                <span class="d-block font-size-sm text-muted">Web Developer</span>
                                                            </span>
                                                        </span>
                            </label>
                            <span class="custom-block-indicator">
                                                        <i class="fa fa-check"></i>
                                                    </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="custom-control custom-block custom-control-primary">
                            <input type="checkbox" class="custom-control-input" id="dm-project-new-people-3" name="dm-project-new-people-3">
                            <label class="custom-control-label" for="dm-project-new-people-3">
                                                        <span class="d-flex align-items-center">
                                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                                                            <span class="ml-2">
                                                                <span class="font-w700">Jose Parker</span>
                                                                <span class="d-block font-size-sm text-muted">Graphic Designer</span>
                                                            </span>
                                                        </span>
                            </label>
                            <span class="custom-block-indicator">
                                                        <i class="fa fa-check"></i>
                                                    </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="custom-control custom-block custom-control-primary">
                            <input type="checkbox" class="custom-control-input" id="dm-project-new-people-4" name="dm-project-new-people-4">
                            <label class="custom-control-label" for="dm-project-new-people-4">
                                                        <span class="d-flex align-items-center">
                                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar4.jpg" alt="">
                                                            <span class="ml-2">
                                                                <span class="font-w700">Amanda Powell</span>
                                                                <span class="d-block font-size-sm text-muted">Developer</span>
                                                            </span>
                                                        </span>
                            </label>
                            <span class="custom-block-indicator">
                                                        <i class="fa fa-check"></i>
                                                    </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="custom-control custom-block custom-control-primary">
                            <input type="checkbox" class="custom-control-input" id="dm-project-new-people-5" name="dm-project-new-people-5">
                            <label class="custom-control-label" for="dm-project-new-people-5">
                                                        <span class="d-flex align-items-center">
                                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                                                            <span class="ml-2">
                                                                <span class="font-w700">Judy Ford</span>
                                                                <span class="d-block font-size-sm text-muted">Marketing</span>
                                                            </span>
                                                        </span>
                            </label>
                            <span class="custom-block-indicator">
                                                        <i class="fa fa-check"></i>
                                                    </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="custom-control custom-block custom-control-primary">
                            <input type="checkbox" class="custom-control-input" id="dm-project-new-people-6" name="dm-project-new-people-6">
                            <label class="custom-control-label" for="dm-project-new-people-6">
                                                        <span class="d-flex align-items-center">
                                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar11.jpg" alt="">
                                                            <span class="ml-2">
                                                                <span class="font-w700">Jack Greene</span>
                                                                <span class="d-block font-size-sm text-muted">Designer</span>
                                                            </span>
                                                        </span>
                            </label>
                            <span class="custom-block-indicator">
                                                        <i class="fa fa-check"></i>
                                                    </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="custom-control custom-block custom-control-primary">
                            <input type="checkbox" class="custom-control-input" id="dm-project-new-people-7" name="dm-project-new-people-7">
                            <label class="custom-control-label" for="dm-project-new-people-7">
                                                        <span class="d-flex align-items-center">
                                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar15.jpg" alt="">
                                                            <span class="ml-2">
                                                                <span class="font-w700">Jeffrey Shaw</span>
                                                                <span class="d-block font-size-sm text-muted">Marketing</span>
                                                            </span>
                                                        </span>
                            </label>
                            <span class="custom-block-indicator">
                                                        <i class="fa fa-check"></i>
                                                    </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="custom-control custom-block custom-control-primary">
                            <input type="checkbox" class="custom-control-input" id="dm-project-new-people-8" name="dm-project-new-people-8">
                            <label class="custom-control-label" for="dm-project-new-people-8">
                                                        <span class="d-flex align-items-center">
                                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                                                            <span class="ml-2">
                                                                <span class="font-w700">Jose Parker</span>
                                                                <span class="d-block font-size-sm text-muted">Mobile Developer</span>
                                                            </span>
                                                        </span>
                            </label>
                            <span class="custom-block-indicator">
                                                        <i class="fa fa-check"></i>
                                                    </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="custom-control custom-block custom-control-primary">
                            <input type="checkbox" class="custom-control-input" id="dm-project-new-people-9" name="dm-project-new-people-9">
                            <label class="custom-control-label" for="dm-project-new-people-9">
                                                        <span class="d-flex align-items-center">
                                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                                            <span class="ml-2">
                                                                <span class="font-w700">Carol White</span>
                                                                <span class="d-block font-size-sm text-muted">Lawyer</span>
                                                            </span>
                                                        </span>
                            </label>
                            <span class="custom-block-indicator">
                                                        <i class="fa fa-check"></i>
                                                    </span>
                        </div>
                    </div>
                </div>
                {{-- file:///D:/Users/wcade/Documents/ecuatask_digitalOcean/laravel-template/Dashmix%201.5%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_projects_create.html --}}
                {{--tecnicos fin--}}

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
                <div class="container">
                    <div class="block-content">
                        <form action="/file-upload" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                </div>

                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Upload dropzone -->
    <script src="{{ asset('js/plugins/dropzone/dropzone.min.js')}}"></script>

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