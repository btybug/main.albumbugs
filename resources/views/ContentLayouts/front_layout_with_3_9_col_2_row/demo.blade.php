<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="left-bar {{isset($settings['left_bar_style']) ? $settings['left_bar_style'] : ''}}">
                @if(has_setting($settings,"left_bar",false))
                    {!! BBRenderUnits($settings['left_bar'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                @endif
            </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="top-bar {{isset($settings['top_content_style']) ? $settings['top_content_style'] : ''}}">
                @if(has_setting($settings,"top_content",false))
                    {!! BBRenderUnits($settings['top_content'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                @endif
            </div>
            <div class="main-cont {{isset($settings['main_content_style']) ? $settings['main_content_style'] : ''}}">

            </div>
        </div>
    </div>
</div>

{!! BBstyle($_this->path.DS.'css/style.css') !!}
{!! useDinamicStyle('containers') !!}