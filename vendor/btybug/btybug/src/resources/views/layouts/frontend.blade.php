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
<div class="full_page">
    @include("btybug::layouts._partials.frontend.notifications")

    <div>
        @yield('content')
    </div>
    {!! HTML::script('public-x/custom/js/'.str_replace(' ','-',$page->title).'.js') !!}
    @yield('js')
</div>
</body>
</html>