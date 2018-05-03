@extends('btybug::layouts.frontend')
@section('contents')
    @if($page->header)
        {!! BBheader() !!}
    @endif
    {!! BBRenderFrontLayout($page,$settings) !!}
    @if($page->footer)
        {!! BBfooter() !!}
    @endif
@stop
<?php
BBmakePabeCss($page);
?>