<div class="container">
    <div class="row">
        <div class="colcontent">
            <div>
                <div class="col-md-2 col-sm-2 col-lg-2 col-xs-12 colleft">
                    <div>
                        @if(has_setting($settings,"left_bar",false))
                            {!! BBRenderUnits($settings['left_bar'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                        @endif
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 colcenter">
                    <div>

                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-lg-2 col-xs-12 colright">
                    <div>
                        @if(has_setting($settings,"right_bar",false))
                            {!! BBRenderUnits($settings['right_bar'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{!! BBstyle($_this->path.DS.'css/style.css') !!}