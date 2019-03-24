@php( $x=0)
@php( $elemtosporpagina=5)

@forelse($repono->reponovedadedetalleshm as $item )
    @if($x==0)
        @include('pdf.invoice_header')
        <table class="table table-bordered">
            <thead class="bg-body">
            <tr>
                <th class="text-center" style="width: 60px;"></th>
                <th>Descripción (Marca - Modelo)</th>
                <th class="text-center" style="width: 90px;">Serie</th>
                <th class="text-right d-none d-sm-table-cell" style="width: 120px;">Empresa</th>
                <th class="text-right d-none d-sm-table-cell" style="width: 120px;">Estado</th>
            </tr>
            </thead>
            <tbody>
            @endif
            @include('pdf.invoice_tabla_llena')
            @php( $x++)
            @if($x==$elemtosporpagina)
                @include('pdf.custom.invoice_footer')
                @php($x=0)
            </tbody>
        </table>
        @include('pdf.invoice_footer_message')
        <div style="page-break-after:always;"></div>
        @endif
        @empty
        @endforelse
        {{--footer default--}}
        @while($x<$elemtosporpagina)
        @php( $x++)
        @include('pdf.invoice_tablaVacia')
        @endwhile
        @if($x==$elemtosporpagina)
        @include('pdf.custom.invoice_footer')
        @php($x=0)
        </tbody>
        </table>
        @include('pdf.invoice_footer_message')
    @endif