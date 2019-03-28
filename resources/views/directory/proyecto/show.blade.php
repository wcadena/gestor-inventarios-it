@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-dark bg-image" style="background-image: url('assets/media/photos/photo23@2x.jpg');">
        <div class="bg-black-75">
            <div class="content content-full content-top">
                <div class="py-4 text-center">
                    <h1 class="font-w700 text-white mb-2">
                        {{ $proyecto->name }}
                    </h1>
                    <h2 class="h3 font-w400 text-white-75">
                        {{ $proyecto->descripcion }}
                    </h2>
                    <a href="{{ url('/proyecto') }}" title="Back">
                        <button class="btn btn-hero-warning">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Atras
                        </button>
                    </a>
                    <a href="{{ url('/proyecto/' . $proyecto->id . '/edit') }}" title="Edit proyecto">
                        <button class="btn btn-hero-primary">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
                        </button>
                    </a>
                    {!! Form::open([
                        'method'=>'DELETE',
                        'url' => ['proyecto', $proyecto->id],
                        'style' => 'display:inline'
                    ]) !!}
                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Borrar', array(
                            'type' => 'submit',
                            'class' => 'btn btn-hero-danger',
                            'title' => 'Borrar proyecto',
                            'onclick'=>'return confirm("Confirma Borrar?")'
                    ))!!}
                    {!! Form::close() !!}
                    <a href="{{ URL::route('proyecto.proyecto_seccion.index', ['proyecto' => $proyecto]) }}"
                       title="Secciones del proyecto" >
                        <button class="btn btn-hero-primary">
                            <i aria-hidden="true" class="fa fa-book"></i> Secciones
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- Meta -->
        <div class="row row-deck">
            <div class="col-md-6">
                <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center bg-body-light">
                        <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar9.jpg" alt="">
                        <div class="mt-2">
                            <p class="font-w600 mb-0">
                                {{ $proyecto->name }} <span class="font-w400 text-muted mb-0">| {{ \Illuminate\Support\Str::title($proyecto->tipo) }}</span>
                            </p>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <div class="item item-circle mx-auto">
                                    <i class="fa fa-fw fa-boxes fa-2x text-dark"></i>
                                </div>
                                <p class="text-muted mb-0">
                                    {{$proyecto->proyectoSeccions->count()}} Proyectos
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="item item-circle mx-auto">
                                    <i class="fa fa-fw fa-users fa-2x text-dark"></i>
                                </div>
                                <p class="text-muted mb-0">
                                    {{$proyecto->proyectoSeccions->count()}} Proyectos
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <div class="block block-rounded block-bordered block-link-shadow">
                    <div class="block-content">
                        <table class="table table-borderless table-striped">
                            <tbody>
                            <tr>
                                <td>
                                                    <span class="text-warning">
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <i class="fa fa-fw fa-star"></i>
                                                    </span>
                                    <span class="class">(790 reviews)</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-heart mr-1 text-danger"></i> 590 Favorites
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-calendar mr-1"></i> 2 weeks ago
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-shopping-basket mr-1"></i> 1750 Sales
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-tags mr-1"></i>
                                    <a class="badge badge-primary text-uppercase font-w600" href="javascript:void(0)">CSS</a>
                                    <a class="badge badge-primary text-uppercase font-w600" href="javascript:void(0)">Sass</a>
                                    <a class="badge badge-primary text-uppercase font-w600" href="javascript:void(0)">Less</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Meta -->


    </div>
    <!-- END Page Content -->


    <div class="container">
        <div class="row">
            {{--@include('admin.sidebar')--}}

            <div class="col-md-9">


            </div>
        </div>
    </div>
@endsection
