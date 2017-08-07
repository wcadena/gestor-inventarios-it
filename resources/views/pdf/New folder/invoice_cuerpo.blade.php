<div class=WordSection1>

    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=576 style='width:431.75pt;border-collapse:collapse;margin-left:-15pt'>

        @include('pdf.invoice_header')

        {{-- inicio de tabla --}}
        {{--forini 1--}}
        @php( $x=0)
        @forelse($custodio->equiposhm as $item )

            @include('pdf.invoice_tabla_llena')
        @empty
            @include('pdf.invoice_tablaVacia')
        @endforelse
        {{--forini 2--}}
        {{-- fin de tabla --}}
        @include('pdf.invoice_footer')

    </table>

</div>