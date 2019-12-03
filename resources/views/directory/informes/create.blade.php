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
                                class="form-control js-select2" style="width: 100%;" data-placeholder="Choose one.."
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
                    <div class="ekihk">
                        {!! $errors->first('tecnicos', '<div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Warning!</strong> :message
            </div>') !!}
                        {{--tecnicos ini--}}
                        <div class="form-group row items-push mb-0">
                            @php $x=0; @endphp

                            @foreach(\App\Models\Role::where('name','tecnico')->first()->users as $item)
                                @php $x++;@endphp
                                <div class="col-md-6 col-xl-4">
                                    <div class="custom-control custom-block custom-control-primary">
                                        {{ Form::checkbox('tecnicos[]', $item->id, false,['class' => 'custom-control-input', 'id' =>'dm-project-new-people-'.$x]) }}

                                        <label class="custom-control-label" for="dm-project-new-people-{{$x}}">
                                <span class="d-flex align-items-center">
                                    <img class="img-avatar img-avatar48" src="{{ asset('media/avatars/avatar14.jpg') }}" alt="">
                                    <span class="ml-2">
                                        <span class="font-w700">{{ $item->name }}</span>
                                        <span class="d-block font-size-sm text-muted">{{ $item->email }}</span>
                                    </span>
                                </span>
                                        </label>
                                        <span class="custom-block-indicator">
                               <i class="fa fa-check"></i>
                            </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- file:///D:/Users/wcade/Documents/ecuatask_digitalOcean/laravel-template/Dashmix%201.5%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_projects_create.html --}}
                        {{--tecnicos fin--}}
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
                <div class="container">
                    <div class="block-content">
                        {!! Form::open(['url' => 'files/file', 'class' => 'dropzone','enctype' =>'multipart/form-data']) !!}
                            <div class="fallback">
                                <input name="files" type="file" multiple />
                            </div>
                            <input type="hidden" name="vinculo_padre" value="{{$vinculo_global_info}}"/>
                            <input type="hidden" name="imageable_type" value="informe_proyectos_seccion"/>
                            <input type="hidden" name="imageable_id" value="{{$vinculo_global_info}}"/>
                        {!! Form::close() !!}
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

@endsection