@extends('layouts.master')

@section('content')

    <section class="section">

        @if($currantWorkspace)

            <div class="row mb-2">
                <div class="col-sm-4">
                    <h2 class="section-title">{{ __('Notes') }}</h2>
                </div>
                <div class="col-sm-8">
                    <div class="text-sm-right">
                        <a class="btn btn-primary btn-rounded mt-4" title="{{ __('Create New Note') }}" href="{{route('project.notes.create',$currantWorkspace->slug)}}">
                            <i class="mdi mdi-plus"></i> {{ __('Create Note') }}
                        </a>
                    </div>
                </div>
            </div>

            @if(count($notes))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach($notes as $note)
                                <div class="col-md-4">
                                    <div class="card mb-0 mt-3 text-white {{$note->color}}">
                                        <div class="card-body">
                                            <div class="card-widgets float-right">
                                                <a itle="{{ __('Edit Note') }}" href="{{route('project.notes.edit',[$currantWorkspace->slug,$note->id])}}">Editar<i class="fa fa-edit"></i></a>
                                                <a href="#" onclick="(confirm('Are you sure ?')?document.getElementById('delete-form-{{$note->id}}').submit(): '');">Borrar<i class="fa fa-trash-alt"></i></a>
                                                <form id="delete-form-{{$note->id}}" action="{{ route('project.notes.destroy',[$currantWorkspace->slug,$note->id]) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                            <h5 class="card-title mb-0">{{$note->title}}</h5>
                                            <div id="cardCollpase2" class="collapse pt-3 show">
                                                {{$note->text}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @else

            <div class="container mt-5">
                <div class="page-error">
                    <div class="page-inner">
                        <h1>404</h1>
                        <div class="page-description">
                            {{ __('Page Not Found') }}
                        </div>
                        <div class="page-search">
                            <p class="text-muted mt-3">{{ __('It\'s looking like you may have taken a wrong turn. Don\'t worry... it happens to the best of us. Here\'s a little tip that might help you get back on track.')}}</p>
                            <div class="mt-3">
                                <a class="btn btn-info mt-3" href="{{route('project.home')}}"><i class="mdi mdi-reply"></i> {{ __('Return Home')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endif
    </section>
    <!-- container -->
@endsection