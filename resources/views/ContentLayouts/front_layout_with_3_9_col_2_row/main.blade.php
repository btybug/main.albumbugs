<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="left-bar">
                @if(has_setting($settings,"left_bar",false))
                    {!! BBRenderUnits($settings['left_bar'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                @endif
            </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="top-bar">
                @if(has_setting($settings,"top_content",false))
                    {!! BBRenderUnits($settings['top_content'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                @endif
            </div>
            <div class="main-cont">
                {!! main_content() !!}
            </div>
        </div>
    </div>
</div>

{!! BBstyle($_this->path.DS.'css/style.css') !!}