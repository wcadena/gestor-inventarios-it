@extends('layouts.master')
@section('htmlheader')
@include('layouts.partials.htmlheader')
        <!-- Select2 -->
<link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')

        <!-- Modal ini-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">@lang('form.modal1')</h4>
            </div>
            <div class="modal-body" id="check-list11a34">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('form.cerrar')</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal fin -->

    <h1>@lang('form.editEquipo')

        <a href="{{ url('equipos', $equipo->id) }}" class="btn btn-primary">@lang('form.hojatrabaj')</a>
        @if(str_contains(Auth::getUser()->rol, ["administrador", 'system']))
        {!! Form::open([

                            'method'=>'DELETE',

                            'url' => ['equipos', $equipo->id],

                            'style' => 'display:inline',

                            'files'=>'true'

                        ]) !!}

        {!! Form::submit(trans('form.deletee'), ['class' => 'btn btn-danger pull-right btn-sm']) !!}

        {!! Form::close() !!}
        @endif

    </h1>

    {!! Form::model($equipo, [
        'method' => 'PATCH',
        'url' => ['equipos', $equipo->id],
        'class' => 'form-horizontal',
        'files' => true
    ]) !!}
        @if(str_contains(Auth::getUser()->rol, ["administrador", 'system']))
        <div class="form-group {{ $errors->has('orden_de_compra_id') ? 'has-error' : ''}}">
                {!! Form::label('orden_de_compra_id', trans('form.ordencompra'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {{ Form::select('orden_de_compra_id', $equipo->extras2['orden'], null, ['class' => 'chosen-select form-control']) }}
                    {!! $errors->first('orden_de_compra_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
    <div class="form-group {{ $errors->has('modelo_equipo_id') ? 'has-error' : ''}}">
        {!! Form::label('modelo_equipo_id', trans('form.modeloid'), ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">

            {!! Form::select('modelo_equipo_id', $equipo->extras2['modelos'], null, ['class' => 'chosen-select form-control']) !!}
            {!! $errors->first('modelo_equipo_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
        @else
            {!! Form::hidden('orden_de_compra_id', null, ['class' => 'form-control']) !!}
            {!! Form::hidden('modelo_equipo_id', null, ['class' => 'form-control']) !!}
        @endif
            <div class="form-group {{ $errors->has('custodio_id') ? 'has-error' : ''}}">
                {!! Form::label('custodio_id', trans('form.asadd2'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {{ Form::select('custodio_id', $equipo->extras2['custodio'], null, ['class' => 'chosen-select form-control']) }}
                    {!! $errors->first('custodio_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estacione_id') ? 'has-error' : ''}}">
                {!! Form::label('estacione_id', trans('form.eid3'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select('estacione_id', $equipo->extras2['estaciones'], null, ['class' => 'chosen-select form-control']) }}
                    {!! $errors->first('estacione_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area_id') ? 'has-error' : ''}}">
                {!! Form::label('area_id', trans('form.ai3e'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select('area_id', $equipo->extras2['areas'], null, ['class' => 'chosen-select form-control']) }}
                    {!! $errors->first('area_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('check_list_id') ? 'has-error' : ''}}">
                {!! Form::label('check_list_id', trans('form.clid32'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select('check_list_id', $equipo->extras2['check_lists'], null, ['class' => 'form-control','id' => 'check_list_id']) }}
                    <button data-area_id="{{$equipo->area_id}}" data-checklist="{{$equipo->check_listxc['id_check_lists']}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        @lang('form.verchecklist')
                    </button>
                    <!--Editar(<a href="{{ url('checklist/' . $equipo->check_list_id ) }}">
                        {{$equipo->check_list_id}}
                    </a>)-->
                    {!! $errors->first('check_list_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('num_cajas') ? 'has-error' : ''}}">
                {!! Form::label('num_cajas', trans('form.ncs234'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('num_cajas', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('num_cajas', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sociedad') ? 'has-error' : ''}}">
                {!! Form::label('sociedad', trans('form.sxs3'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('sociedad', null, ['class' => 'form-control','readonly' => 'readonly']) !!}
                    {!! $errors->first('sociedad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        @if(str_contains(Auth::getUser()->rol, ["administrador", 'system']))
            <div class="form-group {{ $errors->has('no_serie') ? 'has-error' : ''}}">
                {!! Form::label('no_serie', trans('form.noserie'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('no_serie', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('no_serie', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            @else
            <div class="form-group {{ $errors->has('no_serie') ? 'has-error' : ''}}">
                {!! Form::label('no_serie', trans('form.noserie'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{$equipo->no_serie}}
                    {!! Form::hidden('no_serie', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('no_serie', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            @endif
            {{--<div class="form-group {{ $errors->has('codigo_barras') ? 'has-error' : ''}}">
                {!! Form::label('codigo_barras', 'Codigo Barras: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {!! $errors->first('codigo_barras', '<p class="help-block">:message</p>') !!}
                </div>
            </div>--}}{!! Form::hidden('codigo_barras', null, ['class' => 'form-control']) !!}
            <div class="form-group {{ $errors->has('codigo_avianca') ? 'has-error' : ''}}">
                {!! Form::label('codigo_avianca', trans('form.aviancacode'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('codigo_avianca', null, ['class' => 'form-control', 'id' => 'codigo_avianca'  ]) !!}
                    {!! $errors->first('codigo_avianca', '<p class="help-block">:message</p>') !!}

                </div>
            </div>
            {{--<div class="form-group {{ $errors->has('codigo_otro') ? 'has-error' : ''}}">
                {!! Form::label('codigo_otro', 'Codigo Otro: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {!! $errors->first('codigo_otro', '<p class="help-block">:message</p>') !!}
                </div>
            </div>--}}{!! Form::hidden('codigo_otro', null, ['class' => 'form-control']) !!}
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', trans('form.descrip'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ip') ? 'has-error' : ''}}">
                {!! Form::label('ip', trans('form.iip'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ip', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                {!! Form::label('estado', trans('form.estad2w'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('estado', \App\Equipos::getENUM('estado'), null, ['class' => 'chosen-select form-control']) !!}
                    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estatus') ? 'has-error' : ''}}">
                {!! Form::label('estatus', trans('form.statyhs'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {!! Form::select('estatus', \App\Equipos::getENUM('estatus'), null, ['class' => 'chosen-select form-control']) !!}
                    {!! $errors->first('estatus', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('garantia') ? 'has-error' : ''}}">
                {!! Form::label('garantia', trans('form.garantia'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('garantia', \App\Equipos::getENUM('garantia'), null, ['class' => 'chosen-select form-control']) !!}
                    {!! $errors->first('garantia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('observaciones') ? 'has-error' : ''}}">
                {!! Form::label('observaciones', trans('form.obs123'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('observaciones', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('observaciones', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        <div class="form-group {{ $errors->has('imagen') ? 'has-error' : ''}}">
            {!! Form::label('imagen', 'Imagen: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::file('imagen', null, ['class' => 'form-control']) !!}
                {!! $errors->first('imagen', '<p class="help-block">:message</p>') !!}
                @if($equipo->imagen != null)
                <img  width="300" height="200"  alt="{{$equipo->no_serie}}" class="img-thumbnail" src="{{url('equipos/'.$equipo->id .'/image')}}" />
                @endif
            </div>
        </div>

        <div class="form-group {{ $errors->has('empresa_procede1') ? 'has-error' : ''}}">
            {!! Form::label('empresa_procede1', trans('form.empresa_procede1'), ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">

                {{ Form::select('empresa_procede1', $equipo->extras2['empresa'], null, ['class' => 'chosen-select form-control']) }}
                {!! $errors->first('empresa_procede1', '<p class="help-block">:message</p>') !!}
            </div>
        </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit(trans('form.update'), ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection

@section('scripts')
    @include('layouts.partials.scripts')
    <script src="{{ asset('/js/select2.min.js') }}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset('/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>



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