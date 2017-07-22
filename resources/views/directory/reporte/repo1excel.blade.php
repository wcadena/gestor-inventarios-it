

    <div class="table-responsive">
        <table  id="repoTable"  class="table table-striped table-hover table-condensed table-bordered ">

            <thead>

            <tr>

                <th>@lang('rep.modelo')</th>
                <th>@lang('rep.ordenCompra')</th>
                <th>@lang('rep.fecha_orden_compra')</th>
                <th>@lang('rep.nombre_responsable')</th>
                <th>@lang('rep.area_piso')</th>
                <th>@lang('rep.ciudad')</th>
                <th>@lang('rep.estacion')</th>
                <th>@lang('rep.area')</th>
                <th>@lang('rep.num_cajas')</th>
                <th>@lang('rep.sociedad')</th>
                <th>@lang('rep.no_serie')</th>
                <th>@lang('rep.sistema_operativo')</th>
                <th>@lang('rep.codigo_avianca')</th>
                <th>@lang('rep.descripcion')</th>
                <th>@lang('rep.ip')</th>
                <th>@lang('rep.estado')</th>
                <th>@lang('rep.estatus')</th>
                <th>@lang('rep.garantia')</th>
                <th>@lang('rep.observaciones')</th>

            </tr>

            </thead>

            <tbody>

            @php $x=0; @endphp

            @foreach($equipos as $item)

                @php $x++;@endphp

                <tr>

                     <td>
                         @if(isset($link_d))
                             <a href="{{ url('equipos', $item->id) }}/edit">{{ $item->modelo_equipoxc->modelo }}</a>
                         @else
                             {{ $item->modelo_equipoxc->modelo }}
                         @endif
                         </td>
                    <td>{{ $item->orden_de_compraxc->ordenCompra }}</td>
                    <td>{{ $item->orden_de_compraxc->fecha_compra }}</td>
                    <td>{{ $item->custodioxc->nombre_responsable }}</td>
                    <td>{{ $item->custodioxc->area_piso }}</td>
                    <td>{{ $item->custodioxc->ciudad }}</td>
                    <td>{{ $item->estacionxc->estacion }}</td>
                    <td>{{ $item->areaxc->area }}</td>
                    <td>{{ $item->num_cajas }}</td>
                    <td>{{ $item->sociedad }}</td>
                    <td>{{ $item->no_serie }}</td>
                    <td>
                        @php
                            $checklist=\App\CheckList_OpcionesCheckList::OpcionesCheckLists(11,$item->check_listxc->id)->first();

                        @endphp
                        {{$checklist['valor1']}} / {{$checklist['valor2']}}
                        </td>
                    <td>{{ $item->codigo_avianca }}</td>

                    <td>{{ $item->descripcion }}</td>
                    <td>{{ $item->ip }}</td>
                    <td>{{ $item->estado }}</td>
                    <td>{{ $item->estatus }}</td>
                    <td>{{ $item->garantia }}</td>
                    <td>{{ $item->observaciones }}</td>




                </tr>

            @endforeach

            </tbody>

        </table>



    </div>



