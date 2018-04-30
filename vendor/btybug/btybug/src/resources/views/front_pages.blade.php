@extends('btybug::layouts.frontend')
@section('content')
    @if($page->header)
        {!! BBheader() !!}
    @endif
    {!! BBRenderFrontLayout($page,$settings) !!}
    @if($page->footer)
        {!! BBfooter() !!}
    @endif
@stop