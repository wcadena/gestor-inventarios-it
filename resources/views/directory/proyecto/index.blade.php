@extends('layouts.master')

@section('content')



        <!-- Hero -->
        <div class="bg-image" style="background-image: url('/media/photos/photo13@2x.jpg');">
            <div class="bg-black-50">
                <div class="content content-full">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 class="flex-fill font-size-h2 text-white my-2">
                            <i class="fa fa-boxes text-white-50 mr-1"></i> Proyectos
                        </h1>
                        <a class="btn btn-success my-2" href="{{ url('/proyecto/create') }}">
                            <i class="fa fa-fw fa-plus"></i><span class="d-none d-sm-inline ml-1"> Nuevo proyecto</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            {!! Form::open(['method' => 'GET', 'url' => '/proyecto', 'class' => '', 'role' => 'search'])  !!}
                <div class="form-group row items-push mb-0">
                    <div class="col-sm-6 col-xl-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                        <span class="input-group-text bg-white">
                                            <i class="fa fa-search"></i>
                                        </span>
                            </div>
                            <input type="text" class="form-control border-left-0" id="dm-projects-search" name="search" placeholder="Buscar Proyectos.." value="{{ request('search') }}">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 offset-xl-6">
                        <select class="custom-select" id="dm-projects-filter" name="dm-projects-filter">
                            <option value="all">All (6)</option>
                            <option value="active">Active (3)</option>
                            <option value="pending">Pending (1)</option>
                            <option value="planning">Planning (1)</option>
                            <option value="canceled">Canceled (1)</option>
                        </select>
                    </div>
                </div>
                {!! Form::close() !!}
            <div class="row row-deck">
                @foreach($proyecto as $item)
                <div class="col-md-6 col-xl-4">
                    <!-- Project #{{ $item->id }} -->
                    <div class="block block-rounded block-fx-pop">
                        <div class="block-header">
                            <div class="flex-fill text-muted font-size-sm font-w600">

                                <i class="fa fa-clock mr-1"></i> {{ $item->updated_at->localeMonth }} {{ $item->updated_at->day }} del {{ $item->updated_at->year }}
                            </div>
                            <div class="block-options">
                                <div class="dropdown">
                                    <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-users mr-1"></i> People
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-bell mr-1"></i> Alerts
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-check-double mr-1"></i> Tasks
                                        </a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="be_pages_projects_edit.html">
                                            <i class="fa fa-fw fa-pencil-alt mr-1"></i> Edit Project
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content bg-body text-center">
                            <h3 class="font-size-h4 font-w700 mb-1">
                                <a href="be_pages_projects_tasks.html">{{ $item->name }}</a>
                            </h3>
                            <h4 class="font-size-h6 text-muted mb-3">{{ $item->descripcion }}</h4>
                            <div class="push">
                                <span class="badge badge-success text-uppercase font-w700 py-2 px-3">Active</span>
                            </div>
                        </div>
                        <div class="block-content text-center">
                            <a class="img-link m-1" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48" src="/media/avatars/avatar2.jpg" alt="">
                            </a>
                            <a class="img-link m-1" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48" src="/media/avatars/avatar3.jpg" alt="">
                            </a>
                            <a class="img-link m-1" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48" src="/media/avatars/avatar9.jpg" alt="">
                            </a>
                            <a class="img-link m-1" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48" src="/media/avatars/avatar10.jpg" alt="">
                            </a>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny">
                                <div class="col-4">
                                    <a class="btn btn-block btn-light" href="{{ url('/proyecto/' . $item->id) }}" title="Ver proyecto">
                                        <i class="fa fa-eye mr-1 text-muted"></i> Ver
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-block btn-light" href="{{ url('/proyecto/' . $item->id . '/edit') }}" title="Edit proyecto">
                                        <i class="fa fa-edit mr-1 text-muted"></i> Editar
                                    </a>
                                </div>
                                <div class="col-4">
                                {!! Form::open([
                        'method'=>'DELETE',
                        'url' => ['/proyecto', $item->id],
                        'style' => 'display:inline'
                    ]) !!}
                                {!! Form::button('<i class="fa fa-trash-alt" aria-hidden="true"></i> Borrar', array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-block btn-danger',
                                        'title' => 'Delete proyecto',
                                        'onclick'=>'return confirm("Confirm delete?")'
                                )) !!}
                                {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Project #{{ $item->id }} -->
                </div>
                @endforeach
            </div>
        </div>
        <!-- END Page Content -->
        <div class="pagination-wrapper"> {!! $proyecto->appends(['search' => Request::get('search')])->render() !!} </div>



@endsection
