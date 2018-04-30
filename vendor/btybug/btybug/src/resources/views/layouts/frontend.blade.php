<!DOCTYPE html>

@php
    if(!isset($page)){
       \Btybug\btybug\Services\RenderService::getFrontPageByURL();
    }

@endphp
<html lang="@yield('locale')">
<head>
    @include("btybug::layouts._partials.head")
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