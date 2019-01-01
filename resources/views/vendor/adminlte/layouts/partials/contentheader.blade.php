<!-- Content Header (Page header) -->

<section class="content-header">
    <h1 class="hidden-xs">
        @yield('contentheader_title', trans('home.init1'))
        <small>@yield('contentheader_description',trans('home.init2'))</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="glyphicon glyphicon-dashboard"></i> @yield('contentheader_navegacion', 'Inicio')</a></li>
        <li class="active">@yield('contentheader_aqui', trans('home.init3'))</li>
    </ol>
</section>