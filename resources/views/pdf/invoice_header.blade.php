<!-- Invoice Info -->
<div class="row mb-5">
 <!-- Company Info -->
 <div class="col-6">
  <p class="h3">{{$custodio->compania}}</p>
  <address>
   {{$custodio->direccion}}<br>
   {{$custodio->pais}}, {{$custodio->ciudad}}<br>
   {{substr($custodio->area_piso,0,300)}}<br>
   <a href="mailto:{{$custodio->email}}">{{$custodio->email}}</a>
  </address>
 </div>
 <!-- END Company Info -->

 <!-- Client Info -->
 <div class="col-6 text-right">
  <p class="h3">{{$custodio->nombre_responsable}}</p>

  <address>
   {{$custodio->documentoIdentificacion}}<br>
   {{substr($custodio->cargo,0,250)}}<br>
   {{$custodio->telefono}}<br>
  </address>
 </div>
 <!-- END Client Info -->
</div>
<!-- END Invoice Info -->