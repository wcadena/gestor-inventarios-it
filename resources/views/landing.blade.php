@extends('layouts.simple')

@section('content')
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('{{ asset('media/photos/photo15@2x.jpg') }}');">
        <div class="hero bg-white overflow-hidden">
            <div class="hero-inner">
                <div class="content content-full text-center">
                    <h1 class="display-4 font-w700 mb-2">
                        Ecua<span class="text-primary">Inventario</span> <span class="font-w300"> Gestor de Inventarios</span>
                    </h1>
                    <h2 class="h3 font-w300 text-muted mb-5 invisible" data-toggle="appear" data-timeout="150">
                        Bienvenido al Sistema de Gestión de Inventarios de IT.
                    </h2>
                    <span class="m-2 d-inline-block invisible" data-toggle="appear" data-timeout="300">
                        <a class="btn btn-hero-success" href="/login">
                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Ingrese al Sistema
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
@endsection
