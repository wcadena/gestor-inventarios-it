@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('{{asset('media/photos/photo13@2x.jpg')}}');">
        <div class="bg-black-50">
            <div class="content content-full">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="flex-fill font-size-h2 text-white my-2">

                        {{$proyecto->name}} <span class="font-size-lg text-white-75">{{$proyecto->descripcion}}</span>
                    </h1>
                    <a class="btn btn-dark my-2" href="{{ url('/proyecto/' . $proyecto->id . '/edit') }}">
                        <i class="fa fa-fw fa-pencil-alt"></i><span class="d-none d-sm-inline ml-1"> Editar Proyecto</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="row no-gutters flex-md-10-auto">
        <div class="col-md-4 col-lg-5 col-xl-3 order-md-1">
            <div class="content">
                <!-- Toggle Side Content -->
                <div class="d-md-none push">
                    <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                    <button type="button" class="btn btn-block btn-hero-dark" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
                        Project Details
                    </button>
                </div>
                <!-- END Toggle Side Content -->

                <!-- Side Content -->
                <div id="side-content" class="d-none d-md-block push">
                    <!-- Completion -->
                    <h2 class="h4 font-w400 mb-3">Completion</h2>
                    <div class="progress push">
                        <div class="progress-bar bg-muted" role="progressbar" style="width: 34%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="font-size-sm font-w600">34%</span>
                        </div>
                    </div>
                    <!-- END Completion -->

                    <!-- About -->
                    <h2 class="h4 font-w400 my-3">About</h2>
                    <p class="mb-2">
                        This is an important project where we should focus our main efforts for the next few years.
                    </p>
                    <p class="text-muted">
                        November 6, 2023
                    </p>
                    <!-- END About -->

                    <!-- People -->
                    <h2 class="h4 font-w400 my-3">People</h2>
                    <p>
                        <a class="img-link m-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                        </a>
                        <a class="img-link m-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">
                        </a>
                        <a class="img-link m-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar9.jpg" alt="">
                        </a>
                        <a class="img-link m-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                        </a>
                        <a class="img-link m-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                        </a>
                    </p>
                    <!-- END People -->
                </div>
                <!-- END Side Content -->
            </div>
        </div>
        <div class="col-md-8 col-lg-7 col-xl-9 order-md-0 bg-body-dark">
            <!-- Main Content -->
            <div class="content content-full">
                <!-- Tasks, custom functionality is initialized in js/pages/be_pages_projects_tasks.min.js which was auto compiled from _es6/pages/be_pages_projects_tasks.js -->
                <div class="js-tasks">
                    <!-- Add task -->
                    <form id="js-task-form" action="be_pages_projects_tasks.html" method="POST">
                        <input class="form-control form-control-lg font-size-base" type="text" id="js-task-input" name="js-task-input" placeholder="Add a task and press enter..">
                    </form>
                    <!-- END Add task -->
                @foreach($proyecto_seccion as $item)
                    <!-- Tasks List -->
                        <div class="block-header ">
                            <h2 class="content-heading pb-0 mb-3 border-0">
                                {{ $item->name }} <span class="js-task-badge badge badge-pill badge-light animated fadeIn"></span>
                            </h2>
                            <div class="block-options">
                                <a href="{{ URL::route('proyecto.proyecto_seccion.show', ['proyecto' => $proyecto,'proyecto_seccion' =>$item]) }}" title="Ver proyecto_seccion"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                <a href="{{ url('proyecto/'.$item->proyecto_id .'/proyecto_seccion/' . $item->id . '/edit') }}" title="Edit proyecto_seccion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'route' => array('proyecto.proyecto_seccion.destroy', $proyecto,$item),
                                    'style' => 'display:inline'
                                ]) !!}
                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Borrar', array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-sm',
                                        'title' => 'Delete proyecto_seccion',
                                        'onclick'=>'return confirm("Confirm delete?")'
                                )) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>


                        <div class="js-task-list">

                            @foreach($item->informeProyectosSeccions as $informep)
                                <!-- Task -->
                                    <div class="js-task block block-rounded block-fx-pop block-fx-pop mb-2 animated fadeIn" data-task-id="9" data-task-completed="false" data-task-starred="false">
                                        <table class="table table-borderless table-vcenter mb-0">
                                            <tr>
                                                <td class="text-center pr-0" style="width: 38px;">
                                                    <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                                        <input type="checkbox" class="custom-control-input" id="tasks-cb-id9" name="tasks-cb-id9">
                                                        <label class="custom-control-label" for="tasks-cb-id9"></label>
                                                    </div>
                                                </td>
                                                <td class="js-task-content font-w600 pl-0">
                                                    {{$informep->informeMantoPrev->requerimiento}}
                                                </td>
                                                <td class="text-right" style="width: 100px;">
                                                    <button type="button" data-toggle="modal" data-target="#modal-block-slideleft" class="js-task-star btn btn-sm btn-link text-success">
                                                        <i class="far fa-edit fa-fw"></i>
                                                    </button>
                                                    <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                                        <i class="far fa-star fa-fw"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- END Task -->
                            @endforeach
                        </div>
                        <!-- END Tasks List -->
                @endforeach


                </div>
                <!-- END Tasks -->
            </div>
            <!-- END Main Content -->
        </div>
    </div>
    <!-- END Page Content -->
    <!-- Slide Left Block Modal -->
    <div class="modal fade" id="modal-block-slideleft" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideleft" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideleft" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Modal Title</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    </div>
                    <div class="block-content block-content-full text-right bg-light">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Slide Left Block Modal -->
@endsection
