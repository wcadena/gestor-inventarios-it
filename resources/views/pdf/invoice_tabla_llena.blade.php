<tr>
    <td class="text-center">{{ $x+1}}</td>
    <td>
        <p class="font-w600 mb-1">{{$item->modelo_equipoxc->fabricante}}</p>
        <div class="text-muted">{{$item->modelo_equipoxc->modelo}}</div>
    </td>
    <td class="text-center">
        <span class="badge badge-pill badge-primary">{{$item->codigo_avianca}} - {{$item->no_serie}}</span>
    </td>
    <td class="text-right d-none d-sm-table-cell">{{$item->sociedad}}</td>
    <td class="text-right d-none d-sm-table-cell">{{$item->estado}}</td>
</tr>