


    
<html>

<head>
<title>REPORTE DE NOVEDADES FR-SO0702-02</title>
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
<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
        style='border-collapse:collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
    @php( $x=0)
    @forelse($custodio->equiposhm as $item )
        @if($x==0)            
            @include('pdf.invoice_header')
        @endif
        @include('pdf.invoice_tabla_llena')
        @php( $x++)
        @if($x==19)
            @include('pdf.invoice_footer')
            @php($x=0)
            </table>
            <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
        style='border-collapse:collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
            <div style="page-break-after:always;"></div>
        @endif
    @empty
    
    @endforelse
                {{--footer default--}}
    @while($x<19)
        @php( $x++)
        <tr style='mso-yfti-irow:21;height:9.85pt'>
   <td width=12 valign=bottom style='width:9.0pt;border:none;border-right:solid #333 1.0pt;
  padding:0cm 0cm 0cm 0cm;height:9.85pt'>
    <p class=MsoNormal style='mso-line-height-alt:0pt'><span style='font-size:
  4.5pt;mso-bidi-font-size:10.0pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
  Arial;color:#969696'>{{$x+1}}</span></p>
   </td>
   <td width=48 valign=bottom style='width:36.0pt;border:none;border-bottom:
  solid #333 1.0pt;mso-border-top-alt:solid #333 1.0pt;padding:
  0cm 0cm 0cm 0cm;height:9.85pt'>
    <p class=MsoNormal style='margin-left:9.0pt;mso-line-height-alt:0pt'><span
             style='font-size:4.5pt;mso-bidi-font-size:10.0pt;font-family:"Arial",sans-serif;
  mso-fareast-font-family:Arial'>{{--AEROGAL--}}</span></p>
   </td>
   <td width=8 valign=bottom style='width:6.0pt;border-top:none;border-left:
  none;border-bottom:solid #333 1.0pt;border-right:solid #333 1.0pt;
  mso-border-top-alt:solid #333 1.0pt;padding:0cm 0cm 0cm 0cm;height:
  9.85pt'>
    <p class=MsoNormal style='mso-line-height-alt:0pt'><span style='font-size:
  8.5pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Arial'></span></p>
   </td>
   <td width=67 valign=bottom style='width:50.0pt;border-top:none;border-left:
  none;border-bottom:solid #333 1.0pt;border-right:solid #333 1.0pt;
  mso-border-top-alt:solid #333 1.0pt;padding:0cm 0cm 0cm 0cm;height:
  9.85pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-line-height-alt:
  0pt'><span style='font-size:4.5pt;mso-bidi-font-size:10.0pt;font-family:"Arial",sans-serif;
  mso-fareast-font-family:Arial'>{{--2k4005805--}}</span></p>
   </td>
   <td width=75 colspan=2 valign=bottom style='width:56.0pt;border-top:none;
  border-left:none;border-bottom:solid #333 1.0pt;border-right:solid #333 1.0pt;
  mso-border-top-alt:solid #333 1.0pt;padding:0cm 0cm 0cm 0cm;height:
  9.85pt'>
    <p class=MsoNormal style='mso-line-height-alt:0pt'><span style='font-size:
  8.5pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Arial'></span></p>
   </td>
   <td width=269 colspan=3 valign=bottom style='width:202.0pt;border-top:none;
  border-left:none;border-bottom:solid #333 1.0pt;border-right:solid #333 1.0pt;
  mso-border-top-alt:solid #333 1.0pt;padding:0cm 0cm 0cm 0cm;height:
  9.85pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-line-height-alt:
  0pt'><span lang=EN-US style='font-size:4.5pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial",sans-serif;mso-fareast-font-family:Arial;mso-ansi-language:
  EN-US'>{{--HP ELITE BOOK 840G3 TOUCH--}}</span><span lang=EN-US style='font-size:
  8.5pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Arial;
  mso-ansi-language:EN-US'></span></p>
   </td>
   <td width=80 colspan=2 valign=bottom style='width:60.0pt;border-top:none;
  border-left:none;border-bottom:solid #333 1.0pt;border-right:solid #333 1.0pt;
  mso-border-top-alt:solid #333 1.0pt;padding:0cm 0cm 0cm 0cm;height:
  9.85pt'>
    <p class=MsoNormal style='mso-line-height-alt:0pt'><span style='font-size:
  4.5pt;mso-bidi-font-size:10.0pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
  Arial'>{{--5CG70870CJ--}}</span><span style='font-size:8.5pt;mso-bidi-font-size:10.0pt;
  font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial'></span></p>
   </td>
   <td width=39 valign=bottom style='width:29.0pt;border-top:none;border-left:
  none;border-bottom:solid #333 1.0pt;border-right:solid #333 1.0pt;
  mso-border-top-alt:solid #333 1.0pt;padding:0cm 0cm 0cm 0cm;height:
  9.85pt'>
    <p class=MsoNormal style='mso-line-height-alt:0pt'><span style='font-size:
  4.5pt;mso-bidi-font-size:10.0pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
  Arial'>{{--N--}}</span></p>
   </td>
  </tr>
    @endwhile

    @if($x==19)
    @include('pdf.invoice_footer')
    @php($x=0)
    </table>
    @endif

</body>



</html>

