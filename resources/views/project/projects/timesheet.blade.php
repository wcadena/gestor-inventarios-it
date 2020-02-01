@extends('layouts.main')
@section('content')
    <section class="section">
        @if($currantWorkspace && $project)
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h2 class="section-title">{{ __('Timesheet Detail') }}</h2>
                </div>
                @auth('web')
                <div class="col-sm-8">
                    <div class="text-sm-right">
                        <div class="btn-group mt-4">
                            <a href="#" class="btn btn-sm btn-primary" data-ajax-popup="true" data-title="{{ __('Create Timesheet') }}" data-url="{{route('projects.timesheet.create',[$currantWorkspace->slug,$project->id])}}">{{__('Create Timesheet')}}</a>
                        </div>
                    </div>
                </div>
                @endauth
            </div>
            <div class="row">
                <div class="col-md-12 animated">
                    <div class="card author-box card-primary">
                        <div class="card-body">
                            <table id="selection-datatable" class="table" width="100%">
                                <thead>
                                <tr>
                                    <th>{{__('#')}}</th>
                                    <th>{{__('Task')}}</th>
                                    <th>{{__('Date')}}</th>
                                    <th>{{__('Time')}}</th>
                                    @auth('web')
                                    <th>{{__('Action')}}</th>
                                    @endauth
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($project->timesheet() as $key => $timesheet)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$timesheet->task->title}}</td>
                                        <td>{{$timesheet->date}}</td>
                                        <td>{{$timesheet->time}}</td>
                                        @auth('web')
                                        <td>
                                            {{--                                            <a href="#" class="milestone-detail" data-ajax-popup="true" data-title="{{ __('Timesheet Details') }}" data-url="{{route('projects.milestone.show',[$currantWorkspace->slug,$timesheet->id])}}">{{$timesheet->date}}</a>--}}
                                            <small>
                                                <a href="#" class="btn btn-sm btn-outline-primary" data-ajax-popup="true" data-title="{{ __('Edit Milestone') }}" data-url="{{route('projects.timesheet.edit',[$currantWorkspace->slug,$timesheet->id])}}"><i class="mdi mdi-pencil"></i></a>
                                                <a href="#" class="btn btn-sm btn-outline-danger" onclick="(confirm('Are you sure ?')?document.getElementById('delete-form1-{{$timesheet->id}}').submit(): '');"><i class="mdi mdi-delete"></i></a>
                                                <form id="delete-form1-{{$timesheet->id}}" action="{{ route('projects.timesheet.destroy',[$currantWorkspace->slug,$timesheet->id]) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </small>
                                        </td>
                                        @endauth
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
                                <a class="btn btn-info mt-3" href="{{route('home')}}"><i class="mdi mdi-reply"></i> {{ __('Return Home')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection

@push('style')
    <link href="{{asset('assets/css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/vendor/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/vendor/select.bootstrap4.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@push('scripts')
    <script src="{{asset('assets/js/vendor/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('assets/js/vendor/dataTables.responsive.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#selection-datatable").DataTable({
                order: [],
                select: {style: "multi"},
                language: {paginate: {previous: "<i class='mdi mdi-chevron-left'>", next: "<i class='mdi mdi-chevron-right'>"}},
                drawCallback: function () {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                }
            });
        });
    </script>
@endpush
