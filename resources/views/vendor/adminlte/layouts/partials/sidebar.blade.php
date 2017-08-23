<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
         <ul class="sidebar-menu">
             <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
             <!-- Optionally, you can add icons to the links 
             <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
             --><li><a href="{{ url('home') }}"><i class='glyphicon glyphicon-home'></i> <span>@lang('home.men1')</span></a></li>
             <li><a href="{{ url('equipos') }}"><i class='glyphicon glyphicon-print'></i> <span>@lang('home.men2')</span></a></li>
             <li><a href="{{ url('custodio') }}"><i class='glyphicon glyphicon-user'></i> <span>@lang('home.men3')</span></a></li>
             <li><a href="{{ url('checklist') }}"><i class='glyphicon glyphicon-check'></i> <span>@lang('home.men4')</span></a></li>
             <li><a href="{{ url('informes') }}"><i class='glyphicon glyphicon-wrench'></i> <span>Informes</span></a></li>
             <li class="treeview">
                 <a href="#"><i class='fa fa-link'></i> <span>@lang('home.menrep1')</span> <i class="fa fa-angle-left pull-right"></i></a>
                 <ul class="treeview-menu">
                     <li><a href="{{ url('reporte1') }}"><i class='glyphicon glyphicon-stats'></i> <span>@lang('home.menrep1')</span></a></li>
                 </ul>
             </li>
             @if(Auth::getUser()->rol=="administrador")
                 <li class="treeview">
                     <a href="#"><i class="glyphicon glyphicon-wrench"></i> <span>@lang('home.men13')</span> <i class="fa fa-angle-left pull-right"></i></a>
                     <ul class="treeview-menu">
                         <li><a href="{{ url('usuario') }}"><i class='glyphicon glyphicon-user'></i> <span>@lang('home.men7') </span></a></li>
                         <li><a href="{{ url('opciones_check') }}"><i class='glyphicon glyphicon-check'></i> <span>@lang('home.men8')</span></a></li>
                         <li><a href="{{ url('checklist_opcionescheck') }}"><i class='glyphicon glyphicon-link'></i> <span>@lang('home.men5')</span></a></li>
                         <li><a href="{{ url('areas') }}"><i class='glyphicon glyphicon-flag'></i> <span>@lang('home.men9')</span></a></li>
                         <li><a href="{{ url('modelo') }}"><i class='glyphicon glyphicon-copyright-mark'></i> <span>@lang('home.men10')</span></a></li>
                         <li><a href="{{ url('orden') }}"><i class='glyphicon glyphicon-shopping-cart'></i> <span>@lang('home.men11')</span></a></li>
                         <li><a href="{{ url('estaciones') }}"><i class='glyphicon glyphicon-plane'></i> <span>@lang('home.men12')</span></a></li>
                         <li><a href="{{ url('config') }}"><i class='glyphicon glyphicon-wrench'></i> <span>@lang('home.men13')</span></a></li>
                         <li><a href="{{ url('oautho2') }}"><i class='glyphicon glyphicon-wrench'></i> <span>@lang('OAuth2')</span></a></li>
                    </ul>
                 </li>
             @endif
             <li><a href="https://github.com/wcadena/inventarioFinalApp/pulls"  target="_blank"><i class='glyphicon glyphicon-info-sign'></i> <span>@lang('home.menError')</span></a></li>

         </ul>        
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
