<!DOCTYPE html>
@php
    if(!isset($page)){
       \Btybug\btybug\Services\RenderService::getFrontPageByURL();
    }
@endphp
<html lang="@yield('locale')">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @yield('metas')
    <link type="image/x-icon" rel="icon" href="{{ asset('assets/favicon.ico') }}"/>
    <link type="image/x-icon" rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}"/>
    @if(count($page->css))
        @foreach($page->css as $css)
            @if (!filter_var($css, FILTER_VALIDATE_URL) === false)
                {!! Html::style($css) !!}
            @endif
        @endforeach
    @endif
    @yield('css')
    @stack('CSS')
</head>
<body>
<div class="full_page">
    @if (isset($errors) && count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('flash.message') != null)
        <div class="flash alert {{ Session::has('flash.class') ? session('flash.class') : 'alert-success' }}"
             role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            {!! session('flash.message') !!}
        </div>
    @endif

    @if(Session::has('message'))
        <div class="m-t-10 alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible"
             role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            {!! Session::get('message') !!}
        </div>
    @endif
    @yield('content')
<!-- jQuery first, then Bootstrap JS. -->
    @if(count($page->js))
        @foreach($page->js as $js)
            @if (!filter_var($js, FILTER_VALIDATE_URL) === false)
                {!! Html::script($js) !!}
            @endif
        @endforeach
    @endif
    @yield('js')
</div>
</body>
</html>