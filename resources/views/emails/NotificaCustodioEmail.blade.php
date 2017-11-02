@component('mail::message')
# @lang('message.notifica_correo')

@lang('message.notifica_saludo') {{$custodios->nombre_responsable}}
@lang('message.notifica_correo_line1')

@component('mail::button', ['url' => route('pdf',$custodios->documentoIdentificacion)])
@lang('message.notifica_correo')
@endcomponent

@lang('message.notifica_correo_fin')
{{ config('app.name') }}
@endcomponent
