<!DOCTYPE html>
<html lang="{{App::getLocale()}}">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<body class="skin-blue sidebar-mini">
<div id="app-old">
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('adminlte::layouts.partials.contentheader')

        <!-- Main content -->
        <section class="content" >
            @if(Session::has('flash_message'))
                <div class="alert alert-success alert-dismissable fade in">
                    <strong>Mensaje: </strong> {{ Session::get('flash_message') }}
                </div>
            @endif
            <!-- Your Page Content Here -->
            @yield('content')
            @yield('main-content')

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('adminlte::layouts.partials.controlsidebar')

    @include('adminlte::layouts.partials.footer')

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show

</body>
</html>
