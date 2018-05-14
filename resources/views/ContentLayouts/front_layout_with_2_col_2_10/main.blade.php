<div class="col-md-2">
    @if(has_setting($settings,"left_bar",false))
        {!! BBRenderUnits($settings['left_bar'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
    @endif
</div>
<div class="col-md-10">
    {!! main_content() !!}
</div>