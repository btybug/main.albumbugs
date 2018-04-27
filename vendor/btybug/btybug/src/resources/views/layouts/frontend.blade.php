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
    <link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png') }}"/>

    {{--start CSS--}}
    @if($page->css_type == 'default')
        {!! BBCss()  !!}
        <link rel="stylesheet" href="{{ url("public/css/font-awesome/css/font-awesome.min.css") }}"/>
        <link rel="stylesheet" href="{{ url("public/js/jquery-ui/jquery-ui.min.css") }}"/>
        {!! HTML::style("public/css/cms.css?v=".rand(1111,99999)) !!}
    @elseif($page->css_type == 'cms')
        {!! BBgetProfile($page->css_cms,'css',true) !!}
    @elseif($page->css_type == 'external')
        {!! BBlinkAssets($page->css) !!}
    @endif
    {{--end CSS--}}
    {!! HTML::style('public-x/custom/css/'.str_replace(' ','-',$page->title).'.css') !!}
    @yield('css')
    @stack('CSS')

    {{--start JS--}}
    @if($page->js_type == 'default')
        {!! BBJs() !!}
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
        {!! HTML::script("public/js/tinymice/tinymce.min.js") !!}
        {!! HTML::script("public/js/UiElements/bb_iframejs.js") !!}
    @elseif($page->js_type == 'cms')
        {!! BBgetProfile($page->js_cms,'js',true) !!}
    @elseif($page->js_type == 'external')
        {!! BBlinkAssets($page->js) !!}
    @endif
    {{--end JS--}}
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
    <div>
        @yield('content')
    </div>
<!-- jQuery first, then Bootstrap JS. -->
    {{--{!! BBJquery() !!}--}}
    {{--{!! BBMainFrontJS() !!}--}}
    {{--{!! BBJs() !!}--}}
    {!! HTML::script('public-x/custom/js/'.str_replace(' ','-',$page->title).'.js') !!}
    @yield('js')
</div>
</body>
</html>