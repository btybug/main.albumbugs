<div class="container-fluid">
    <div class="row div-flex {{isset($settings['main_page_style']) ? $settings['main_page_style'] : ''}}">
        <div class="col-md-3 col-sm-3 col-xs-12 ">
            <div class="{{isset($settings['ls_style']) ? $settings['ls_style'] : ''}}">
                @switch(issetReturn($settings,'ls_content_type'))
                    @case('unit')
                    @if(has_setting($settings,'ls_unit'))
                        {!! BBRenderUnits($settings['ls_unit'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                    @endif
                    @break

                    @case('hook')
                    @if(has_setting($settings,'hooks') && is_array($settings['hooks']['ls_hook']))
                    @foreach($settings['hooks']['ls_hook'] as $unit)
                        {!! BBRenderUnits($unit,isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                    @endforeach
                    @endif
                    @break

                    @default
                    <span>Something went wrong, please try again</span>
                @endswitch
            </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12 {{isset($settings['right_area_style']) ? $settings['right_area_style'] : ''}}">
            <div class="">
                @switch(issetReturn($settings,'tr_content_type'))
                    @case('unit')
                    @if(has_setting($settings,'tr_unit'))
                        {!! BBRenderUnits($settings['tr_unit'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                    @endif
                    @break

                    @case('hook')
                    @if(has_setting($settings,'hooks') && is_array($settings['hooks']['tr_hook']))
                        @foreach($settings['hooks']['tr_hook'] as $unit)
                            {!! BBRenderUnits($unit,isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                        @endforeach
                    @endif
                    @break

                    @default
                    <span>Something went wrong, please try again</span>
                @endswitch
            </div>
            <div class="">
                @switch(issetReturn($settings,'main_content_type'))
                    @case('unit')
                    @if(has_setting($settings,'main_unit'))
                        {!! BBRenderUnits($settings['main_unit'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                    @endif
                    @break

                    @case('hook')
                    @if(has_setting($settings,'hooks') && is_array($settings['hooks']['main_hook']))
                        @foreach($settings['hooks']['main_hook'] as $unit)
                            {!! BBRenderUnits($unit,isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                        @endforeach
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