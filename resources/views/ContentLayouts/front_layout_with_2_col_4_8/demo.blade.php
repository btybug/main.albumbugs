<div class="container">
    <div class="row">
        <div class="colcontent">
            <div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12 colleft">
                    <div>
                        @if(has_setting($settings,"left_bar",false))
                            {!! BBRenderUnits($settings['left_bar'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
                        @endif
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 colright">
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! BBstyle($_this->path.DS.'css/style.css') !!}