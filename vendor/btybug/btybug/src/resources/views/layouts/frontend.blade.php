<!DOCTYPE html>
@php
    if(!isset($page)){
       \Btybug\btybug\Services\RenderService::getFrontPageByURL();
    }

@endphp
<html lang="@yield('locale')">
<head>
    @include("btybug::layouts._partials.frontend.head")
</head>
<body>
@include("btybug::layouts._partials.frontend.notifications")

@yield('contents')
{!! HTML::style('public/css/pages/'.str_replace(' ','-',$page->title).'.css') !!}
@yield('js')
</body>
</html>