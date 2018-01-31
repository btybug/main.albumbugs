<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 coltophead">
            <div>
                @if(has_setting($settings,"top_content",false))
                    {!! BBRenderUnits($settings['top_content'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                @endif
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 colcontent">
            <div>
                <div class="col-md-3 col-sm-3 col-xs-12 colleft">
                    <div>
                        @if(has_setting($settings,"left_bar",false))
                            {!! BBRenderUnits($settings['left_bar'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                        @endif
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 colright">
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

{!! BBstyle($_this->path.DS.'css/style.css') !!}