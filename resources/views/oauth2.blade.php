@extends('layouts.master')

@section('htmlheader_title')
  {{ trans('message.home') }}
@endsection

@section('contentheader_aqui', 'Oauth2')

@section('content')
  <h1>Passport</h1>
  <example></example>
  <h4>Para entrar desde otra aplicacion como facebbok</h4>
  <p>Recuerde crear la redireccion com /callback</p>
  <passport-clients></passport-clients>
  <passport-authorized-clients></passport-authorized-clients>
  <h1> Token personales</h1>
  <p>para usar desde aplicacio a aplicacion, queda implicito el usuario q lo crea</p>
  <passport-personal-access-tokens></passport-personal-access-tokens>
  <h3>Para crear un token para aplicacion y usar usuario y clave desde la aplicación Anfitrion</h3>
  <p>
    Para cuando se necesita usar un token para comprobar y desde la aplicación de uso esta registra el usaurio y la contrase;a desde la aplicacion anfitrion , usar <code>grant_type password</code>
  </p>
  <code>php artisan passport:client --password</code>
@endsection

