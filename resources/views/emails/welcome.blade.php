Hola {{$user->name}}
gracias por activar tu cuenta
{{route('verify',$user->verification_token)}}