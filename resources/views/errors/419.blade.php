@extends('errors::layout')

@section('title', 'Page Expired')

@section('message')
    @lang('form.The page has expired due to inactivity.')
    <br/><br/>
    @lang('form.Please refresh and try again.')
@stop
