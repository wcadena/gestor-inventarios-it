@extends('layouts.master')

@section('htmlheader_title')
    {{ trans('message.home') }}
@endsection

@section('contentheader_aqui', 'Equipos')

@section('content')
    <div class="bg-image" style="background-image: url('assets/media/various/bg_dashboard.jpg');">
        <div class="bg-white-90">
            <div class="content content-full">
                <div class="row">
                    <div class="col-md-6 d-md-flex align-items-md-center">
                        <div class="py-4 py-md-0 text-center text-md-left js-appear-enabled animated fadeIn" data-toggle="appear">
                            <h1 class="font-size-h2 mb-2">Dashboard</h1>
                            <h2 class="font-size-lg font-w400 text-muted mb-0">{{ trans('message.logged') }} {{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
                        </div>
                    </div>
                    <div class="col-md-6 d-md-flex align-items-md-center">
                        <div class="row w-100 text-center">
                            <div class="col-6 col-xl-4 offset-xl-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="300">
                                <p class="font-size-h3 font-w600 text-body-color-dark mb-0">
                                    2
                                </p>
                                <p class="font-size-sm font-w700 text-uppercase mb-0">
                                    <i class="far fa-chart-bar text-muted mr-1"></i> Reportes
                                </p>
                            </div>
                            <div class="col-6 col-xl-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="600">
                                <p class="font-size-h3 font-w600 text-body-color-dark mb-0">
                                    4
                                </p>
                                <p class="font-size-sm font-w700 text-uppercase mb-0">
                                    <i class="far fa-chart-bar text-muted mr-1"></i> Proyectos
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-image" style="background-image: url('assets/media/various/bg_dashboard.jpg');">
        <div class="bg-white-90">
            <div class="content content-full">
                <div class="content content-full">
                    <div class="d-flex justify-content-between align-items-center py-3">
                        <h2 class="h3 font-w400 mb-0">Overview</h2>
                    </div>
                    <div class="row row-deck">
                        <div class="col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear">
                            <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="item item-circle bg-primary-lighter mx-auto my-3">
                                        <i class="fa fa-laptop text-primary"></i>
                                    </div>
                                    <div class="text-black display-4 font-w700">{{$maquinas}}</div>
                                    <div class="text-muted mt-1">{{trans('home.equipo2r')}}</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="150">
                            <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="item item-circle bg-xinspire-lighter mx-auto my-3">
                                        <i class="fa fa-user text-xinspire-dark"></i>
                                    </div>
                                    <div class="text-black display-4 font-w700">{{$usuarios}}</div>
                                    <div class="text-muted mt-1">{{trans('home.equipo4r')}}</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="300">
                            <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="item item-circle bg-xsmooth-lighter mx-auto my-3">
                                        <i class="fa fa-columns text-xsmooth"></i>
                                    </div>
                                    <div class="text-black display-4 font-w700">{{$equipos_asignados}}</div>
                                    <div class="text-muted mt-1">{{trans('home.equipo5r')}}</div>

                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="450">
                            <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="item item-circle bg-xplay-lighter mx-auto my-3">
                                        <i class="fa fa-level-up-alt text-xplay"></i>
                                    </div>
                                    <div class="text-black display-4 font-w700">{{$custodios}}</div>
                                    <div class="text-muted mt-1">{{trans('home.equipo6r')}}</div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row row-deck">
                    <div class="col-xl-6 js-appear-enabled animated fadeIn" data-toggle="appear">
                        <div class="block block-rounded block-mode-loading-refresh">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Estaciones</h3>
                                <div class="block-options">
                                    <i class="fa fa-map-marked-alt"></i>
                                </div>
                            </div>
                            <div class="block-content">
                                <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                                    <thead>
                                    <tr class="text-uppercase">
                                        <th class="font-w700 text-center" style="width: 120px;">Estación</th>
                                        <th class="font-w700">Valor</th>
                                        <th class="d-none d-sm-table-cell font-w700">Maquinas</th>
                                        <th class="font-w700 text-center" style="width: 60px;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pie_estaciones as $item)
                                        <tr>
                                            <td class="text-center">
                                                {{$item->estacion}}
                                            </td>
                                            <td>
                                                <div class="font-w600 font-size-base">{{$item->Contador}}</div>
                                                <div class="text-muted">{{trans('home.men2')}}</div>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-base">
                                                <span class="badge badge-dark">{{trans('home.men2')}}</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{url('reporteEstaciones/'.$item->estacione_id)}}">
                                                    <i class="fa fa-chart-bar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="200">
                        <div class="block block-rounded block-mode-loading-refresh">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Areas</h3>
                                <div class="block-options">
                                    <i class="fa fa-map-signs"></i>
                                </div>
                            </div>
                            <div class="block-content">
                                <canvas id="chartjs-4" class="chartjs" width="770" height="385" style="display: block; "></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js_after')
    <!-- Page JS Chart -->
    <script src="{{ asset('js/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <script>
      new Chart(document.getElementById("chartjs-4"),
        {"type":"doughnut",
          "data":{"labels":[
                  @foreach($pie_estaciones as $item)
                  "{{$item->estacion}}",
                  @endforeach
            ],
            "datasets":[{"label":"My First Dataset",
              "data":[
                  @foreach($pie_estaciones as $item)
                  {{$item->Contador}},
                  @endforeach
              ],
              "backgroundColor":[
                @php $faker = Faker\Factory::create(); @endphp
                        @foreach($pie_estaciones as $item)
                  "{{$faker->rgbCssColor}}",
                  @endforeach
              ]
          }]
        }
        }
        );</script>

@endsection