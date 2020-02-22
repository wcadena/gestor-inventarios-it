
<!-- Navigation -->
<div class="bg-white">
    <div class="content">
        <!-- Toggle Main Navigation -->
        <div class="d-lg-none push">
            <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
            <button type="button" class="btn btn-block btn-light d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                Menu
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <!-- END Toggle Main Navigation -->
        <!-- Main Navigation -->
        <div id="main-navigation" class="d-none d-lg-block push">
            <ul class="nav-main nav-main-horizontal nav-main-hover">
                <li class="nav-main-item">
                    <a class="nav-main-link {{ (Request::route()->getName() == 'home' || Request::route()->getName() == NULL) ? ' active' : '' }}" href="{{ route('project.home') }}">
                        <i class="nav-main-link-icon fa fa-chart-pie"></i>
                        <span class="nav-main-link-name">{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li class="nav-main-heading">Administracion</li>


                @if(isset($currantWorkspace) && $currantWorkspace)
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ (Request::route()->getName() == 'project.projects.index') ? ' active' : '' }}"  href="@auth('web'){{ route('project.projects.index',$currantWorkspace->slug) }}@elseauth{{ route('project.client.projects.index',$currantWorkspace->slug) }}@endauth">
                            <i class="nav-main-link-icon fa fa-globe"></i>
                            <span class="nav-main-link-name">{{ __('Projects') }}</span>
                        </a>
                    </li>
                @endif

                <li class="nav-main-heading">Account</li>

                @auth('web')
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ (Request::route()->getName() == 'users.index') ? ' active' : '' }}" href="{{ route('project.users.index',$currantWorkspace->slug) }}">
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">{{ __('Users') }}</span>
                        </a>
                    </li>
                    @if($currantWorkspace->creater->id == Auth::user()->id)
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ (Request::route()->getName() == 'clients.index') ? ' active' : '' }}" href="{{ route('project.clients.index',$currantWorkspace->slug) }}">
                                <i class="nav-main-link-icon fa fa-handshake"></i>
                                <span class="nav-main-link-name"> {{ __('Clients') }}</span>
                            </a>
                        </li>
                    @endif

                    <li class="nav-main-item">
                        <a class="nav-main-link {{ (Request::route()->getName() == 'calender.index') ? ' active' : '' }}"  href="{{route('project.calender.index',$currantWorkspace->slug)}}">
                            <i class="nav-main-link-icon fa fa-calendar-alt"></i>
                            <span class="nav-main-link-name">{{ __('Calender') }}</span>
                        </a>
                    </li>


                    <li class="nav-main-item">
                        <a class="nav-main-link {{ (Request::route()->getName() == 'notes.index') ? ' active' : '' }}" href="{{route('project.notes.index',$currantWorkspace->slug)}}">
                            <i class="nav-main-link-icon fa fa-clipboard"></i>
                            <span class="nav-main-link-name">{{ __('Notes') }}</span>
                        </a>
                    </li>

                @endauth

                <li class="nav-main-item ml-lg-auto">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-brush"></i>
                        <span class="nav-main-link-name">Themes</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Main Navigation -->
    </div>
</div>
