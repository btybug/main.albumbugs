@extends('btybug::layouts.a_special')
@section('content')
@php
    if(!isset($page)){
        $page = \Btybug\btybug\Services\RenderService::getFrontPageByURL();
    }
@endphp

1q1
@stop
