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
        {!! Form::open([
           'url' => 'busqueda',
           'method' => 'POST',
           'class' => 'sidebar-form'
       ]) !!}
        <div class="input-group  {{ $errors->has('q') ? 'has-error' : ''}} ">
            {!! Form::text('q', null, ['class' => 'form-control','placeholder' =>  trans('adminlte_lang::message.search')]) !!}
            <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
        </div>
    {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
    {!! Form::close() !!}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        {{ Menu::sidebar() }}
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
