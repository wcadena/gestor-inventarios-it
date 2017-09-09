@component('mail::message')
# @lang('message.verifica_correo')

@lang('message.verifica_saludo') {{$user->name}}
@lang('message.verifica_correo_line1')

@component('mail::button', ['url' => route('verify',$user->verification_token)])
@lang('message.verifica_correo')
@endcomponent

@lang('message.verifica_correo_fin')
{{ config('app.name') }}
@endcomponent
