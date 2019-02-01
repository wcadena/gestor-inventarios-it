@extends('layouts.master')


@section('css_before')
    <link href="{{ asset('js/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
@endsection

@section('contentheader_aqui', 'Equipos')

@section('content')
    <div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="" id="myModalLabel"></h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal ini-->

    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title modal-title" id="myModalLabel">@lang('form.modal1')</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="modal-body" id="check-list11a34">
                            <i class="fa fa-4x fa-sync fa-spin text-muted"></i>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-right bg-light">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">@lang('form.cerrar')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Modal fin -->

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">@lang('form.editEquipo')</h1>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <a href="{{ url('equipos', $equipo->id) }}" class="btn btn-hero-primary js-click-ripple-enabled">@lang('form.hojatrabaj')</a>
                        </button>
                        @if(str_contains(Auth::getUser()->rol, ["administrador", 'system']))
                            {!! Form::open([

                                                'method'=>'DELETE',

                                                'url' => ['equipos', $equipo->id],

                                                'style' => 'display:inline',

                                                'files'=>'true'

                                            ]) !!}
                            {!! Form::button(__('form.deletee'),    ['class' => 'btn btn-hero-danger js-click-ripple-enabled','type' => 'submit']) !!}

                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Equipos</h3>
                </div>
                <div class="block-content">
                    {!! Form::model($equipo, [
            'method' => 'PATCH',
            'url' => ['equipos', $equipo->id],
            'class' => 'form-horizontal',
            'files' => true
        ]) !!}
                    @if(str_contains(Auth::getUser()->rol, ["administrador", 'system']))
                        <div class="form-group ">
                            {!! Form::label('orden_de_compra_id', trans('form.ordencompra'), ['class' => 'control-label']) !!}
                            <div class="ekihk">

                                {{ Form::select('orden_de_compra_id', $equipo->extras2['orden'], null, ['class' => 'chosen-select form-control'.($errors->has('orden_de_compra_id') ? ' form-control-alt is-invalid' : '')]) }}
                                {!! $errors->first('orden_de_compra_id', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('modelo_equipo_id', trans('form.modeloid'), ['class' => 'control-label']) !!}
                            <div class="ekihk">

                                {!! Form::select('modelo_equipo_id', $equipo->extras2['modelos'], null, ['class' => 'chosen-select form-control'.( $errors->has('modelo_equipo_id') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('modelo_equipo_id', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                    @else
                        {!! Form::hidden('orden_de_compra_id', null, ['class' => 'form-control']) !!}
                        {!! Form::hidden('modelo_equipo_id', null, ['class' => 'form-control']) !!}
                    @endif
                    <div class="form-group ">
                        {!! Form::label('custodio_id', trans('form.asadd2'), ['class' => 'control-label'.($errors->has('custodio_id') ? ' form-control-alt is-invalid' : '')]) !!}
                        <div class="ekihk">

                            {{ Form::select('custodio_id', $equipo->extras2['custodio'], null, ['class' => 'chosen-select form-control']) }}
                            {!! $errors->first('custodio_id', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {!! Form::label('estacione_id', trans('form.eid3'), ['class' => 'control-label']) !!}
                        <div class="ekihk">
                            {{ Form::select('estacione_id', $equipo->extras2['estaciones'], null, ['class' => 'chosen-select form-control'.($errors->has('estacione_id') ? ' form-control-alt is-invalid' : '')]) }}
                            {!! $errors->first('estacione_id', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {!! Form::label('area_id', trans('form.ai3e'), ['class' => 'control-label']) !!}
                        <div class="ekihk">
                            {{ Form::select('area_id', $equipo->extras2['areas'], null, ['class' => 'chosen-select form-control'.($errors->has('area_id') ? ' form-control-alt is-invalid' : '')]) }}
                            {!! $errors->first('area_id', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('check_list_id', trans('form.clid32'), ['class' => 'control-label']) !!}
                        <div class="ekihk">
                            {{ Form::select('check_list_id', $equipo->extras2['check_lists'], null, ['class' => 'form-control','id' => 'check_list_id'.($errors->has('check_list_id') ? ' form-control-alt is-invalid' : '')]) }}
                            <button data-area_id="{{$equipo->area_id}}" data-checklist="{{$equipo->check_listxc['id_check_lists']}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                @lang('form.verchecklist')
                            </button>
                        <!--Editar(<a href="{{ url('checklist/' . $equipo->check_list_id ) }}">
                        {{$equipo->check_list_id}}
                                </a>)-->
                            {!! $errors->first('check_list_id', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {!! Form::label('num_cajas', trans('form.ncs234'), ['class' => 'control-label']) !!}
                        <div class="ekihk">
                            {!! Form::number('num_cajas', null, ['class' => 'form-control'.($errors->has('num_cajas') ? ' form-control-alt is-invalid' : '')]) !!}
                            {!! $errors->first('num_cajas', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {!! Form::label('sociedad', trans('form.sxs3'), ['class' => 'control-label']) !!}
                        <div class="ekihk">
                            {!! Form::text('sociedad', null, ['class' => 'form-control'.($errors->has('sociedad') ? ' form-control-alt is-invalid' : ''),'readonly' => 'readonly']) !!}
                            {!! $errors->first('sociedad', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    @if(str_contains(Auth::getUser()->rol, ["administrador", 'system']))
                        <div class="form-group ">
                            {!! Form::label('no_serie', trans('form.noserie'), ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {!! Form::text('no_serie', null, ['class' => 'form-control'.( $errors->has('no_serie') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('no_serie', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                    @else
                        <div class="form-group ">
                            {!! Form::label('no_serie', trans('form.noserie'), ['class' => 'control-label']) !!}
                            <div class="ekihk">
                                {{$equipo->no_serie}}
                                {!! Form::hidden('no_serie', null, ['class' => 'form-control'.( $errors->has('no_serie') ? ' form-control-alt is-invalid' : '')]) !!}
                                {!! $errors->first('no_serie', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                    @endif
                    {{--<div class="form-group {{ $errors->has('codigo_barras') ? ' form-control-alt is-invalid' : ''}}">
                        {!! Form::label('codigo_barras', 'Codigo Barras: ', ['class' => 'control-label']) !!}
                        <div class="ekihk">

                            {!! $errors->first('codigo_barras', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>--}}{!! Form::hidden('codigo_barras', null, ['class' => 'form-control']) !!}
                    <div class="form-group ">
                        {!! Form::label('codigo_avianca', trans('form.aviancacode'), ['class' => 'control-label'.($errors->has('codigo_avianca') ? ' form-control-alt is-invalid' : '')]) !!}
                        <div class="ekihk">
                            {!! Form::text('codigo_avianca', null, ['class' => 'form-control', 'id' => 'codigo_avianca'  ]) !!}
                            {!! $errors->first('codigo_avianca', '<p class="invalid-feedback">:message</p>') !!}

                        </div>
                    </div>
                    {{--<div class="form-group {{ $errors->has('codigo_otro') ? ' form-control-alt is-invalid' : ''}}">
                        {!! Form::label('codigo_otro', 'Codigo Otro: ', ['class' => 'control-label']) !!}
                        <div class="ekihk">

                            {!! $errors->first('codigo_otro', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>--}}{!! Form::hidden('codigo_otro', null, ['class' => 'form-control']) !!}
                    <div class="form-group">
                        {!! Form::label('descripcion', trans('form.descrip'), ['class' => 'control-label']) !!}
                        <div class="ekihk">
                            {!! Form::text('descripcion', null, ['class' => 'form-control'.($errors->has('descripcion') ? ' form-control-alt is-invalid' : '')]) !!}
                            {!! $errors->first('descripcion', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {!! Form::label('ip', trans('form.iip'), ['class' => 'control-label']) !!}
                        <div class="ekihk">
                            {!! Form::text('ip', null, ['class' => 'form-control'.($errors->has('ip') ? ' form-control-alt is-invalid' : '')]) !!}
                            {!! $errors->first('ip', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {!! Form::label('estado', trans('form.estad2w'), ['class' => 'control-label'.($errors->has('estado') ? ' form-control-alt is-invalid' : '')]) !!}
                        <div class="ekihk">
                            {!! Form::select('estado', \App\Equipos::getENUM('estado'), null, ['class' => 'chosen-select form-control']) !!}
                            {!! $errors->first('estado', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {!! Form::label('estatus', trans('form.statyhs'), ['class' => 'control-label'.($errors->has('estatus') ? ' form-control-alt is-invalid' : '')]) !!}
                        <div class="ekihk">

                            {!! Form::select('estatus', \App\Equipos::getENUM('estatus'), null, ['class' => 'chosen-select form-control']) !!}
                            {!! $errors->first('estatus', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('garantia', trans('form.garantia'), ['class' => 'control-label']) !!}
                        <div class="ekihk">
                            {!! Form::select('garantia', \App\Equipos::getENUM('garantia'), null, ['class' => 'chosen-select form-control'.($errors->has('garantia') ? ' form-control-alt is-invalid' : '')]) !!}
                            {!! $errors->first('garantia', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {!! Form::label('observaciones', trans('form.obs123'), ['class' => 'control-label']) !!}
                        <div class="ekihk">
                            {!! Form::text('observaciones', null, ['class' => 'form-control'.( $errors->has('observaciones') ? ' form-control-alt is-invalid' : '')]) !!}
                            {!! $errors->first('observaciones', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {!! Form::label('imagen', 'Imagen: ', ['class' => 'control-label']) !!}
                        <div class="ekihk">
                            {!! Form::file('imagen', null, ['class' => 'form-control'.($errors->has('imagen') ? ' form-control-alt is-invalid' : '')]) !!}
                            {!! $errors->first('imagen', '<p class="invalid-feedback">:message</p>') !!}
                            @if($equipo->imagen != null)
                                <img  width="300" height="200"  alt="{{$equipo->no_serie}}" class="img-thumbnail" src="{{url('equipos/'.$equipo->id .'/image')}}" />
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('empresa_procede1', trans('form.empresa_procede1'), ['class' => 'control-label']) !!}
                        <div class="ekihk">

                            {{ Form::select('empresa_procede1', $equipo->extras2['empresa'], null, ['class' => 'chosen-select form-control'.($errors->has('empresa_procede1') ? ' form-control-alt is-invalid' : '')]) }}
                            {!! $errors->first('empresa_procede1', '<p class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>


                    <div class="block-content row justify-content-center border-top">
                        <div class="col-9">
                            {!! Form::button(__('<i class="fa fa-fw fa-save mr-1"></i> '.trans('form.update')), ['class' => 'btn btn-block btn-hero-primary','type' => 'submit']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/select2/js/select2.min.js') }}"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function(){ Dashmix.helpers('select2'); });</script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

    <script>
      jQuery(function(){
        Dashmix.helpers('datepicker');
      });
    </script>

    <!-- InputMask -->
    <script src="{{ asset('js/plugins/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>

    <script>
      jQuery(function(){
        Dashmix.helpers('masked-inputs');
      });
    </script>



    <script>

        var area_id_g = -1;
        var check_list_id_g = -1;
        function poderAction(){
            $('#as55trgyu a').on('click', function(e) {
                e.preventDefault();
                alert("@lang('form.update2')...");
                var ut = $(this).attr('href');
                $.ajax({
                            url: ut,
                            cache: false
                        })
                        .done(function( html ) {
                            $('#check-list11a34').html( html );
                            poderAction();
                        });
                // alert(ut);
            });
        }
        function cargaChecklist(area_id,check_list_id){
            $.ajax({
                        url: "{{url('checklist_crear_mini')}}/"+area_id+"/"+check_list_id,
                        cache: false
                    })
                    .done(function( html ) {
                        $('#check-list11a34').html( html );
                        ////////////////////////////////////////////////7
                        poderAction();
                        ////////////////////////////////////////////////7
                    });

        }
        window.onload = function() {
            $(function () {

                $('#myModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var recipient = button.data('checklist') // Extract info from data-* attributes
                    var area = button.data('area_id') // Extract info from data-* attributes
                    var check_list_id = $('#check_list_id').val();
                    area_id_g = area;
                    check_list_id_g = check_list_id;
                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                    ////////////////////////////////////////////////////
                    cargaChecklist(area_id_g, check_list_id_g);
                    ////////////////////////////////////////////////////////
                    var modal = $(this)
                    modal.find('.modal-title').text('@lang('form.editarChecklist'): ' + recipient)
                    modal.find('.modal-body input').val(recipient)
                });

            });
        }
    </script>
@endsection