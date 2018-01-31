<div class="col-md-3">
    @if(has_setting($settings,"left_bar",false))
        {!! BBRenderUnits($settings['left_bar'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
    @endif
</div>
<div class="col-md-6">
    {!! main_content() !!}
</div>
<div class="col-md-3">
    @if(has_setting($settings,"right_bar",false))
        {!! BBRenderUnits($settings['right_bar'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
    @endif
</div>