<div class="form-group">
    <label class="col-md-12 control-label">{!! issetReturn($settings,'label',null) !!}</label>
<div class="col-md-12">
    <div class="input-group">
                                    <span class="input-group-addon">
                    <i class="fa {!! issetReturn($settings,'icon',null) !!}"></i>
                </span>
        <input class="form-control1 " placeholder="{!! issetReturn($settings,'placeholder',null) !!}" name="test_blog_title" type="text" value="{!! issetReturn($settings,'default_val',null) !!}">
        <span class="input-group-addon tooltip1">
                        <i class="fa {!! issetReturn($settings,'tooltip_icon',null) !!}"></i>
                    <span class="tooltiptext">{!! issetReturn($settings,'help',null) !!}</span>
            </span>
    </div>
</div>
</div>
