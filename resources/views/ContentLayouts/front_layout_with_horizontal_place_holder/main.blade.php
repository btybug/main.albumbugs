<div class="col-md-12">
    @if(has_setting($settings,"top_content",false))
        {!! BBRenderUnits($settings['top_content'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
    @endif
</div>
<div class="col-md-3">
    @if(has_setting($settings,"left_bar",false))
        {!! BBRenderUnits($settings['left_bar'],isset($settings['_page'])?['_page'=>$settings['_page']]:[]) !!}
    @endif
</div>
<div class="col-md-9">
    {!! main_content() !!}
</div>