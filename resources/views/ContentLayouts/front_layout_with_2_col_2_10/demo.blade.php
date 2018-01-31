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
                <div class="col-md-10 col-sm-10 col-lg-10 col-xs-12 colright">
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{!! BBstyle($_this->path.DS.'css/style.css') !!}