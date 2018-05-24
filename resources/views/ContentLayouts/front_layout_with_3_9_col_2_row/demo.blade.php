<div class="container-fluid">
    <div class="row row-no-gutter {{(isset($settings['main_page_style'])&& $settings['main_page_style']) ? $settings['main_page_style'] : 'div-flex'}}">
        <div class="{!! issetReturn($settings,'ls_desktop').' '.issetReturn($settings,'ls_l_table').' '.issetReturn($settings,'ls_p_table').' '.issetReturn($settings,'ls_mobile')!!}">
            <div class=" default-column {{(isset($settings['ls_style'])&& $settings['ls_style'] ) ? $settings['ls_style'] : 'demo-column'}}">
                <div>
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
                        @case('editor')
                        <div class="text-right">
                            <div class="cl-editor">
                                <button type="submit" class="btn btn-sm btn-info">Save</button>
                                {!! BBeditor() !!}
                            </div>
                        </div>

                        @break
                        @default
                        <span>Something went wrong, please try again</span>
                    @endswitch
                </div>
            </div>
        </div>
        <div class="{!! issetReturn($settings,'rc_desktop').' '.issetReturn($settings,'rc_l_table').' '.issetReturn($settings,'rc_p_table').' '.issetReturn($settings,'rc_mobile')!!}">
            <div class="default-column  {{isset($settings['right_area_style']) ? $settings['right_area_style'] : ''}}">
                <div>
                    <div class="{{(isset($settings['tr_style'])&& $settings['tr_style']) ? $settings['tr_style'] : 'demo-column'}} ">
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
                    <div class="{{(isset($settings['mr_style'])&& $settings['mr_style']) ? $settings['mr_style']: 'demo-column'}} ">
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
                            @case('editor')
                            <div class="text-right">
                                <div class="cl-editor">
                                    <button type="submit" class="btn btn-sm btn-info">Save</button>
                                    {!! BBeditor() !!}
                                </div>
                            </div>

                            @break
                            @default
                            <span>Something went wrong, please try again</span>
                        @endswitch
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    tinymce.init({
        selector: 'textarea.cms_editor'});
</script>
{!! BBstyle($_this->path.DS.'css/style.css') !!}
{!! useDinamicStyle('containers') !!}
{{--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>--}}
