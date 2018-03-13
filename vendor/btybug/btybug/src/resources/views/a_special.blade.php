@extends('btybug::layouts.a_special')
@section('content')
@php
    if(!isset($page)){
        $page = \Btybug\btybug\Services\RenderService::getFrontPageByURL();
    }
@endphp
    @if($page->content_type == 'template')
        {!! BBRenderUnits($page->template) !!}
    @endif
@stop
