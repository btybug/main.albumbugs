<div class="container-fluid">
    <div class="row  {{(isset($settings['main_page_style'])&& $settings['main_page_style']) ? $settings['main_page_style'] : 'div-flex'}}">
        <div class="col-md-3 col-sm-3 col-xs-12 ">
            <div class="{{(isset($settings['ls_style'])&& $settings['ls_style'] ) ? $settings['ls_style'] : 'left-bar'}}">
                @switch(issetReturn($settings,'ls_content_type'))
                    @case('unit')
                    @if(has_setting($settings,'ls_unit'))
                        {!! BBRenderUnits($settings['ls_unit'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                    @endif
                    @break

                    @case('hook')
                        @if(has_setting($settings,'hooks') && is_array($settings['hooks']['ls_hook']))
                            {!! BBrenderHook($settings['hooks']['ls_hook']) !!}
                        @endif
                    @break

                    @default
                    <span>Something went wrong, please try again</span>
                @endswitch
            </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12 {{isset($settings['right_area_style']) ? $settings['right_area_style'] : ''}}">
            <div class="{{(isset($settings['right_area_style'])&& $settings['right_area_style']) ? '' : 'top-bar'}} ">
                @switch(issetReturn($settings,'tr_content_type'))
                    @case('unit')
                    @if(has_setting($settings,'tr_unit'))
                        {!! BBRenderUnits($settings['tr_unit'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                    @endif
                    @break

                    @case('hook')
                        @if(has_setting($settings,'hooks') && isset($settings['hooks']['tr_hook']))
                                {!! BBrenderHook($settings['hooks']['tr_hook']) !!}
                        @endif
                    @break
                    @default
                    <span>Something went wrong, please try again</span>
                @endswitch
            </div>
            <div class=" {{(isset($settings['right_area_style'])&& $settings['right_area_style']) ? '' : 'main-cont'}} ">
                @switch(issetReturn($settings,'main_content_type'))
                    @case('unit')
                    @if(has_setting($settings,'main_unit'))
                        {!! BBRenderUnits($settings['main_unit'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                    @endif
                    @break

                    @case('hook')
                        @if(has_setting($settings,'hooks') && is_array($settings['hooks']['main_hook']))
                            {!! BBrenderHook($settings['hooks']['main_hook']) !!}
                        @endif
                    @break

                    @default
                    <span>Something went wrong, please try again</span>
                @endswitch
            </div>
        </div>
    </div>
</div>

{!! BBstyle($_this->path.DS.'css/style.css') !!}
{!! useDinamicStyle('containers') !!}