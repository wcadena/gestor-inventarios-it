@extends('layouts.mini')
@section('htmlheader')
@include('layouts.partials.htmlheader')
        <!-- Select2 -->
<link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<!-- bootstrap datepicker -->
<link href="{{ asset('/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
    <div class="pull-right btn-sm" id="{{'alert-x'}}"></div>
    <button type="submit" data-check_list_id="1212121" class="wadsij3 btn btn-primary btn-xs" data-loading-text="Cargando..." >Nuevo</button>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>@lang('form.sno')</th><th>Valor1</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @php $x=0; @endphp
            @foreach($checklist_opcionescheck as $item)
                @php $x++;@endphp

                <tr class="actu0jkw34" data-id="{{$item->id}}">
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('checklist_opcionescheck', $item->id) }}">{{ $item->atributo }}</a>

                    </td>
                    <td>{{ $item->tipo }}
                        <input type="hidden" name="_token" id="{{'token-'.$item->id}}" value="<?php echo csrf_token(); ?>">
                    </td>
                    <!-- 'si-no', 'text','equipo_id','fecha','si-no&version','ip','equipo_id&texto' -->
                    @if($item->tipo=='si-no')
                        <td>{{ Form::select('valor1', array('SI' => 'SI', 'NO' => 'NO'),$item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control')) }}</td>
                    @elseif($item->tipo=='text'||$item->tipo=='equipo_id'||$item->tipo=='serial')
                        <td>{{Form::text('valor1', $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control'))}}</td>
                    @elseif($item->tipo=='equipo_id-olll')
                        <td>{{Form::select('valor1', array($item->valor1 => $item->valor1),  $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'id_serchf form-control','data-valor' => $item->valor1)) }}
                        </td>					@elseif($item->tipo=='equipo_id')                        <td>{{Form::text('valor1', $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control'))}}</td>                    @elseif($item->tipo=='fecha')
                        @if($item->valor1=='')
                            <td>{{Form::date('name', '',array('id' => 'valor1-'.$item->id,'class' => 'form-control datepicker7892' ,'data-inputmask' =>"'alias': 'mm/dd/yyyy'", 'data-mask' ))}}</td>
                        @else
                            <td>{{Form::date('name', $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control datepicker7892' ,'data-inputmask' =>"'alias': 'mm/dd/yyyy'", 'data-mask' ))}}</td>
                        @endif
                    @elseif($item->tipo=='si-no&version')
                        <td>{{ Form::select('valor1', array('SI' => 'SI', 'NO' => 'NO'),$item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control')) }}
                            {{Form::text('valor2', $item->valor2,array('id' => 'valor2-'.$item->id,'class' => 'form-control'))}}</td>
                    @elseif($item->tipo=='ip')
                        <td>{{Form::text('valor1', $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control ipmask667','data-inputmask' =>"'alias': 'ip'", 'data-mask'))}}</td>
                    @elseif($item->tipo=='equipo_id&texto')
                        <td>
                            {{Form::select('valor1', array($item->valor1 => $item->valor1),  $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'id_serchf form-control','data-valor' => $item->valor1,)) }}
                            {{Form::text('valor2', $item->valor2,array('id' => 'valor2-'.$item->id,'class' => 'form-control'))}}
                        </td>

                    @elseif($item->tipo=='CM')
                        <td>
                            {{Form::text('valor1', $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control'))}}
                        </td>
                    @elseif($item->tipo=='FM')
                        <td>
                            {{Form::text('valor1', $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control'))}}
                        </td>
                    @elseif($item->tipo=='SAPE')
                        <td>
                            {{Form::text('valor1', $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control'))}}
                        </td>
                    @elseif($item->tipo=='CM TA')
                        <td>
                            <div class="input-group"><div class="input-group-addon">WID (WorkStation ID)</div>{{Form::text('valor1', $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID -CRT</div>{{Form::text('valor2', $item->valor2,array('id' => 'valor2-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID -BPP</div>{{Form::text('valor3', $item->valor3,array('id' => 'valor3-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID -BTP</div>{{Form::text('valor4', $item->valor4,array('id' => 'valor4-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">No de Asociación</div>{{Form::text('valor5', $item->valor5,array('id' => 'valor5-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID DGR</div>{{Form::text('valor6', $item->valor6,array('id' => 'valor6-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID - PRT</div>{{Form::text('valor7', $item->valor7,array('id' => 'valor7-'.$item->id,'class' => 'form-control'))}}</div>
                        </td>
                    @elseif($item->tipo=='SAPE TA')
                        <td>
                            <div class="input-group"><div class="input-group-addon">WID (WorkStation ID)</div>{{Form::text('valor1', $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID -CRT</div>{{Form::text('valor2', $item->valor2,array('id' => 'valor2-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID -BPP</div>{{Form::text('valor3', $item->valor3,array('id' => 'valor3-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID -BTP</div>{{Form::text('valor4', $item->valor4,array('id' => 'valor4-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">No de Asociación</div>{{Form::text('valor5', $item->valor5,array('id' => 'valor5-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID DGR</div>{{Form::text('valor6', $item->valor6,array('id' => 'valor6-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID - PRT</div>{{Form::text('valor7', $item->valor7,array('id' => 'valor7-'.$item->id,'class' => 'form-control'))}}</div>
                        </td>
                    @elseif($item->tipo=='CM AV')
                        <td>
                            <div class="input-group"><div class="input-group-addon">WID (WorkStation ID)</div>{{Form::text('valor1', $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID -CRT</div>{{Form::text('valor2', $item->valor2,array('id' => 'valor2-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID -BPP</div>{{Form::text('valor3', $item->valor3,array('id' => 'valor3-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID -BTP</div>{{Form::text('valor4', $item->valor4,array('id' => 'valor4-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">No de Asociación</div>{{Form::text('valor5', $item->valor5,array('id' => 'valor5-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID DGR</div>{{Form::text('valor6', $item->valor6,array('id' => 'valor6-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID - PRT</div>{{Form::text('valor7', $item->valor7,array('id' => 'valor7-'.$item->id,'class' => 'form-control'))}}</div>
                        </td>
                    @elseif($item->tipo=='SAPE AV')
                        <td>
                            <div class="input-group"><div class="input-group-addon">WID (WorkStation ID)</div>{{Form::text('valor1', $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID -CRT</div>{{Form::text('valor2', $item->valor2,array('id' => 'valor2-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID -BPP</div>{{Form::text('valor3', $item->valor3,array('id' => 'valor3-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID -BTP</div>{{Form::text('valor4', $item->valor4,array('id' => 'valor4-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">No de Asociación</div>{{Form::text('valor5', $item->valor5,array('id' => 'valor5-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID DGR</div>{{Form::text('valor6', $item->valor6,array('id' => 'valor6-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">TID - PRT</div>{{Form::text('valor7', $item->valor7,array('id' => 'valor7-'.$item->id,'class' => 'form-control'))}}</div>
                        </td>
                    @elseif($item->tipo=='ARD')
                        <td>
                            <div class="input-group"><div class="input-group-addon">Cid</div>{{Form::text('valor1', $item->valor1,array('id' => 'valor1-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">Office</div>{{Form::text('valor2', $item->valor2,array('id' => 'valor2-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">Atid</div>{{Form::text('valor3', $item->valor3,array('id' => 'valor3-'.$item->id,'class' => 'form-control'))}}</div>
                            <div class="input-group"><div class="input-group-addon">Atid Proprinter asociado</div>{{Form::text('valor4', $item->valor4,array('id' => 'valor4-'.$item->id,'class' => 'form-control'))}}</div>
                        </td>
                    @elseif($item->tipo=='OBSERVACIONES')
                        <td>
                            {{Form::textarea('valor1', trim(strip_tags($item->valor1)),array('id' => 'valor1-'.$item->id,'class' => 'form-control textarea','name'=>"editor1",'rows'=>"10", 'cols'=>"80"))}}
                        </td>

                    @else
                        <td>No esta programado este tipo de respuesta, <br />
                            los validos son:<br/>
                            <code>'si-no','text','equipo_id','fecha','si-no&version','ip','equipo_id&texto','CM','FM','SAPE','CM TA','SAPE TA','CM AV','SAPE AV','OBSERVACIONES','ARD'</code></td>
                    @endif
                    <td>


                        <button type="submit" class="zxsdfg btn btn-primary btn-xs" data-loading-text="Cargando..." >Actualizar</button>


                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['checklist_opcionescheck', $item->id],
                            'style' => 'display:inline',
                            'class' => 'formdatahju',
                        ]) !!}
                        {!! Form::submit(trans('form.deletee'), ['class' => 'hjuyxcrt6g btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                    {!! Form::open([
                           'method'=>'POST',
                           'url' => ['checklist_opcionescheck', $item->id],
                           'style' => 'display:inline',
                            'id' => 'form-'.$item->id
                       ]) !!}
                    {!! Form::close() !!}
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination" id="as55trgyu"> {!!($checklist_opcionescheck->appends(['sort' => 'votes'])->render() )!!} </div>
    </div>
@endsection
@section('scripts')
    <script>
        function submitdelchecklist(){
            $( ".formdatahju" ).submit(function( event ) {
                var $btn = $(this).button('loading');
                //alert( "Handler for .submit() called." );
                var a= $(this).serialize();
                //alert(a);
                var b = $(this).attr('action');
                //alert(b);
                event.preventDefault();
                $.ajax({
                    url: b,
                    type: 'post',
                    data: a,
                    success: function(data){
                        //alert("listo:"+data);

                        $("#alert-x").fadeIn();
                        $("#alert-x").html("<strong>Actualizado!</strong>  "+data);
                        $("#alert-x").fadeOut();
                        cargaChecklist(area_id_g,check_list_id_g);
                        $btn.button('reset');

                    },error: function(xhr, status, error) {
                        alert(error);
                        alert(status);
                        alert(xhr);
                        $btn.button('reset');
                    }
                });
            });
        }

        function poderAction(){

            $('#as55trgyu a').on('click', function(e) {
                e.preventDefault();
                var ut = $(this).attr('href');
                $.ajax({
                            url: ut,
                            cache: false
                        })
                        .done(function( html ) {
                            $('#check-list11a34').html( html );
                            poderAction();
                            delPoder();
                            accionajaxboton();
                            //selectAccion();
                            accionajaxboton_crear();
                            submitdelchecklist();
                            selectAccion();
                        });
                // alert(ut);
            });
        }
        function delPoder(){
            $( ".formdatahju" ).submit(function( event ) {
                //alert( "Handler for .submit() called." );
                //event.preventDefault();
                //poderAction();
            });
        }


        function submitcreaform(){
            $( ".datrguu7s9io" ).submit(function( event ) {
                //alert( "Handler for .submit() called." );
                var a= $(this).serialize();
                //alert(a);
                var b = $(this).attr('action');

                var $btn = $(this).button('loading');
                //alert(b);
                event.preventDefault();
                $.ajax({
                    url: b,
                    type: 'post',
                    data: a,
                    success: function(data){
                        cargaChecklist(area_id_g,check_list_id_g);
                        $btn.button('reset');

                    },error: function(xhr, status, error) {
                        alert(error);
                        alert(status);
                        alert(xhr);
                        $btn.button('reset');
                    }
                });
            });
        }

        //wadsij3
        function accionajaxboton_crear(){
            $('button.wadsij3').click(function (e) {
                e.preventDefault();
                var button = $(e.relatedTarget) // Button that triggered the modal
                /////////////////////////////////////////
                var $btn = $(this).button('loading');
                //alert(id);
                var url ='{{url('api/checklist_crear_option')}}/'+check_list_id_g;
                var $post             = {};
                $.ajax({
                            url: url,
                            cache: false
                        })
                        .done(function( html ) {
                            $btn.button('reset');
                            $('#check-list11a34').html( html );
                            submitcreaform();
                            poderAction();
                            delPoder();
                            accionajaxboton();
                            //selectAccion();
                            accionajaxboton_crear();
                            submitdelchecklist();
                            selectAccion();
                        });
            });
        }
        function accionajaxboton(){
            /////////////////////////////////////////////////////////////////////////////////////////////

            $('.datepicker7892').inputmask();
            $(".ipmask667").inputmask();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //alert("hola");
            /////////////////////////////////////////////////////////////////////////////////////////////
            $('button.zxsdfg').click(function (e) {
                e.preventDefault();
                var a= $(this).parents("tr");
                var id = (a.data('id'));
                /////////////////////////////////////////

                var $btn = $(this).button('loading');
                //alert(id);
                var url =$("#form-"+id).attr("action");
                var $post             = {};
                $post.valor1            = $('#valor1-' +id).val();
                $post.valor2            = $('#valor2-' +id).val();
                $post.valor3            = $('#valor3-' +id).val();
                $post.valor4            = $('#valor4-' +id).val();
                $post.valor5            = $('#valor5-' +id).val();
                $post.valor6            = $('#valor6-' +id).val();
                $post.valor7            = $('#valor7-' +id).val();
                $post.valor8            = $('#valor8-' +id).val();
                $post.valor9            = $('#valor9-' +id).val();
                $post.valor10           = $('#valor10-' +id).val();

                $post._token        = $('#token-' +id).val();
                //alert("listo");
                $.ajax({
                    type: "PATCH",
                    url: url,
                    data: $post,
                    cache: false,
                    success: function(data){
                        //alert("listo:"+data);
                        $("#alert-x").fadeIn();
                        $("#alert-x").html("<strong>Actualizado!</strong> Actualizado sin novedad ");
                        $("#alert-x").fadeOut();
                        $btn.button('reset');

                    },error: function(xhr, status, error) {
                        alert(error);
                        alert(status);
                        alert(xhr);
                        $btn.button('reset');
                    }
                });
                /**/
                /////////////////////////////////////////
                // business logic...
            });
        }
        function selectAccion(){
            $('.id_serchf2').select2({
                // Activamos la opcion "Tags" del plugin

                language: "es",
                placeholder: "Select Avianca Code",
                tags: true,
                tokenSeparators: [','],
                templateResult: formatState,
                ajax: {
                    dataType: 'json',
                    url: '{{ url("tags") }}',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term
                        }
                    },
                    processResults: function (data, page) {
                        return {
                            results: data
                        };
                    },
                }
            });
        }
        ///////////////////////////////////////////////////////////////////////////////////////////
        function formatState (state) {
            if (!state.id) { return state.text; }
            var $state = $(
                    '<span>'+state.id+":" + state.text + '</span>'
            );
            return $state;
        };

        ///////////////////////////////////////////////////////////////////////////////////////
       // $(function () {
            ////////////////////////////////////////////////7
            poderAction();
            delPoder();
            accionajaxboton();
            //selectAccion();
            accionajaxboton_crear();
            submitdelchecklist();
            selectAccion();
            ////////////////////////////////////////////////7
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //alert("hola");
        //});
    </script>
@endsection