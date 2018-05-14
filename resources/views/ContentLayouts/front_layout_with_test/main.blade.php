<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="left-bar">
                @if(has_setting($settings,"left_bar",false))
                    {!! BBRenderUnits($settings['left_bar'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                @endif
            </div>
        </div>
        <div class="col-md-9">
            <div class="top-bar">
                @if(has_setting($settings,"children",false))
                    @if(isset($settings["children"]["hook"]))
                        {!! \Btybug\btybug\Repositories\HookRepository::renderHooks($settings["children"]["hook"],$settings) !!}
                    @endif
                @endif
            </div>
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