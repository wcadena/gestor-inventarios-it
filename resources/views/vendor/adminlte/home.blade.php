@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">{{trans('home.men1')}}</h3>
					</div>
					<div class="box-body">
						{{ trans('adminlte_lang::message.logged') }} {{\Illuminate\Support\Facades\Auth::user()->name}}
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
	<section class="content">
		<!-- Info boxes -->
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua">
						<i class="fa fa-laptop" aria-hidden="true"></i>
					</span>

					<div class="info-box-content">
						<span class="info-box-text">{{trans('home.equipo2r')}}</span>
						<span class="info-box-number">{{$maquinas}}<small> </small></span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-red"><i class="fa fa-user" aria-hidden="true"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">{{trans('home.equipo4r')}}</span>
						<span class="info-box-number">{{$usuarios}}</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->

			<!-- fix for small devices only -->
			<div class="clearfix visible-sm-block"></div>

			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-green"><i class="fa fa-user-plus" aria-hidden="true"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">{{trans('home.equipo5r')}}</span>
						<span class="info-box-number">{{$equipos_asignados}}</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-yellow"><i class="fa fa-users" aria-hidden="true"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">{{trans('home.equipo6r')}} </span>
						<span class="info-box-number">{{$custodios}}</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
		<div class="row">

		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">{{trans('home.equipo7r')}} </h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-8">
						<div class="chart-responsive">
							<canvas id="pieChart" height="150"></canvas>
						</div>
						<!-- ./chart-responsive -->
					</div>
					<!-- /.col -->
					<div class="col-md-4">
						<ul class="chart-legend clearfix">
							@foreach($pie_estaciones as $item)
								<li><i class="fa fa-circle-o" style="color:rgb({{$item->Contador}}, 0, {{$item->Contador}})" ></i> {{$item->estacion}}</li>
							@endforeach
						</ul>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.box-body -->
			<div class="box-footer no-padding">
				<ul class="nav nav-pills nav-stacked">
					@foreach($pie_estaciones as $item)
					<li><a href="{{url('reporteEstaciones/'.$item->estacione_id)}}">
							{{$item->estacion}}
							<span class="pull-right" style="color:rgb({{$item->Contador}}, 0, {{$item->Contador}})" >
								<i class="fa fa-angle-left"></i>  {{$item->Contador}} {{trans('home.men2')}}</span></a></li>
					@endforeach
				</ul>
			</div>
			<!-- /.footer -->
		</div>
		<!-- /.box -->
		</div><!-- /.row -->
	</section>

@endsection

@section('scripts')

	@include('layouts.partials.scripts')
	<!-- ChartJS -->
	<script src="{{ asset('/plugins/chartjs/Chart.min.js') }}"></script>
	<script>
        // -------------
        // - PIE CHART -
        // -------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
        var pieChart       = new Chart(pieChartCanvas);
        var PieData        = [
			@foreach($pie_estaciones as $item)

            {
                value    : {{$item->Contador}},
                color    : 'rgb({{$item->Contador}}, 0, {{$item->Contador}})',
                highlight: '#f56954',
                label    : '{{$item->estacion}}'
            },
			@endforeach
        ];
        var pieOptions     = {
            // Boolean - Whether we should show a stroke on each segment
            segmentShowStroke    : true,
            // String - The colour of each segment stroke
            segmentStrokeColor   : '#fff',
            // Number - The width of each segment stroke
            segmentStrokeWidth   : 1,
            // Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            // Number - Amount of animation steps
            animationSteps       : 100,
            // String - Animation easing effect
            animationEasing      : 'easeOutBounce',
            // Boolean - Whether we animate the rotation of the Doughnut
            animateRotate        : true,
            // Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale         : false,
            // Boolean - whether to make the chart responsive to window resizing
            responsive           : true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio  : false,
            // String - A legend template
            legendTemplate       : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<segments.length; i++){%><li><span style=\'background-color:<%=segments[i].fillColor%>\'></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
			// String - A tooltip template
			tooltipTemplate      : '<%=value %> <%=label%> maquinas'
		  };
		  // Create pie or douhnut chart
		  // You can switch between pie and douhnut using the method below.
		  pieChart.Doughnut(PieData, pieOptions);
		  // -----------------
		  // - END PIE CHART -
		  // -----------------


	</script>
@endsection
