<html>

<head>

 <style>
  <!--
  /* Font Definitions */
  @font-face
  {font-family:"Cambria Math";
   panose-1:2 4 5 3 5 4 6 3 2 4;
   mso-font-charset:0;
   mso-generic-font-family:roman;
   mso-font-pitch:variable;
   mso-font-signature:-536870145 1107305727 0 0 415 0;}
  @font-face
  {font-family:Calibri;
   panose-1:2 15 5 2 2 2 4 3 2 4;
   mso-font-charset:0;
   mso-generic-font-family:swiss;
   mso-font-pitch:variable;
   mso-font-signature:-536859905 1073786111 1 0 511 0;}
  /* Style Definitions */
  p.MsoNormal, li.MsoNormal, div.MsoNormal
  {mso-style-unhide:no;
   mso-style-qformat:yes;
   mso-style-parent:"";
   margin:0cm;
   margin-bottom:.0001pt;
   mso-pagination:widow-orphan;
   font-size:10.0pt;
   font-family:"Calibri",sans-serif;
   mso-fareast-font-family:Calibri;
   mso-bidi-font-family:Arial;}
  span.SpellE
  {mso-style-name:"";
   mso-spl-e:yes;}
  span.GramE
  {mso-style-name:"";
   mso-gram-e:yes;}
  .MsoChpDefault
  {mso-style-type:export-only;
   mso-default-props:yes;
   font-family:"Calibri",sans-serif;
   mso-ascii-font-family:Calibri;
   mso-fareast-font-family:Calibri;
   mso-hansi-font-family:Calibri;
   mso-bidi-font-family:Arial;}
  @page WordSection1
  {size:612.0pt 792.0pt;
   margin:21.55pt 90.0pt 72.0pt 74.0pt;
   mso-header-margin:0cm;
   mso-footer-margin:0cm;
   mso-paper-source:0;}
  div.WordSection1
  {page:WordSection1;}
  -->
 </style>
 
</head>

<body >

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
               </body>

</html>