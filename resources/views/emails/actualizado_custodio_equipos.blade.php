@component('mail::message')
# Se actualizo el Custodio de Equipos

Estimado {{$custodios->nombre_responsable}}:
Se ha actualizado las maquinas bajo su custodia, este correo es una notificación de cambio.

@component('mail::button', ['url' => route('pdf/{id}',$custodios->documentoIdentificacion)])
Archivo Actualizado
@endcomponent

Reivise los adjuntos para verificar.
{{ config('app.name') }}
@endcomponent
