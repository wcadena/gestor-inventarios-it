<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Proyectos</h3>

            <ul class='control-sidebar-menu'>
                <li>
                    <a href='javascript::;'>
                        <h4 class="control-sidebar-subheading">
                            Proyectos Completados
                            <span class="label label-danger pull-right">70%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
            </ul><!-- /.control-sidebar-menu -->
            <!-- desarrollo -->
            <hr />
            <h3 class="control-sidebar-heading">@lang('home.equipo1c') <a href="#">@lang('home.equipo2c')</a></h3>

            <div class="menu-info">
                <h4 class="control-sidebar-subheading">@lang('home.Copyrightw1')</h4>
                @lang('home.creadopor4')
                <a href="https://github.com/wcadena/inventarioFinalApp" target="_blank">@lang('home.autor')</a>.
            </div>
            <hr />
            <div class="menu-info">
                <a href="@lang('home.url')"></a><b>@lang('home.sesinvetecu')</b></a>. @lang('home.footer1j').<br/>
            </div>
                <!-- /.control-sidebar-menu -->

        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">{{ trans('adminlte_lang::message.statstab') }}</div><!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            {{Menu::sidebar_opciones()}}
        </div><!-- /.tab-pane -->
    </div>
</aside><!-- /.control-sidebar

<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>