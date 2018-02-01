@extends('btybug::layouts.frontend')
@section('content')
    @if(isset($settings['pl']) && isset($settings['pl_live_settings']))
        <textarea data-pagejson="setting" class="hide">{!! json_encode($settings,true) !!}</textarea>
        @if(isset($settings['header']) && $settings['header'])
            {!! BBheader() !!}
        @endif
        <div class="main_content">
            @if(isset($settings['mw']) && $settings['mw'])
                {!! BBRenderPageSections($settings['pl'],$settings,$settings['mw']) !!}
            @else

                {!! BBRenderPageSections($settings['pl'],$settings,$page->main_view) !!}
            @endif
        </div>
        @if(isset($settings['footer']) && $settings['footer'])
            {!! BBfooter() !!}
        @endif
    @else
        @if($page->header)
            {!! BBheader() !!}
        @endif
        <div class="main_content">
            {!! BBRenderPageSections($page->page_layout,$settings) !!}
        </div>
        @if($page->footer)
            {!! BBfooter() !!}
        @endif
    @endif
@stop