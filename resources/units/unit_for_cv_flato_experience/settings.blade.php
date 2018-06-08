<?php
$container_styles = getDinamicStyle('containers');
$image_styles = getDinamicStyle('images');
$text_styles = getDinamicStyle('texts');

?>
@option('general','f',$data)
<div class="bty-settings-panel">
    <div class="exp-panel">
        @if(isset($settings['exp_count']))
         @for($i=1; $i <= $settings['exp_count']; $i++)
                <div class="bty-panel-collapse">
                    <div>
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne-{{$i}}" aria-expanded="true">
                            <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                            <span class="title">Work Section# {{$i}}</span>
                        </a>
                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-minus"></i></a>
                    </div>
                    <div id="collapseOne-{{$i}}" class="collapse" aria-expanded="true" style="">
                        <div class="content-panel">
                            <div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="">Company Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('company_name'.$i, null,['class'=>'form-control ']) !!}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="">Position</label>
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('position'.$i, null,['class'=>'form-control ']) !!}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="">Description</label>
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::textarea('desc'.$i, issetReturn($settings, 'desc'.$i), ['class'=>'form-control ']) !!}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <h4>Period</h4>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="col-md-4 text-right">
                                            <label for="">From</label>
                                        </div>
                                        <div class="col-md-8">
                                            {!! Form::text('from'.$i, null, ['class'=>'form-control ']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-4 text-right">
                                            <label for="">To</label>
                                        </div>
                                        <div class="col-md-8">
                                            {!! Form::text('to'.$i, null, ['class'=>'form-control ']) !!}
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

        @endfor
    @endif
    </div>
    <input type="text" name="exp_count" id="exp_count" value="@if(isset($settings['exp_count'])){{$settings['exp_count']}}@else {{1}} @endif" style="display: none" />

    <div class="text-right">
        <button id="plus" class="btn btn-info"><i class="fa fa-plus"></i></button>
    </div>
</div>
@endoption
@option('general','s',$data)
<div class="bty-settings-panel">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Select Style</label>
            </div>
            <div class="col-md-8">
                {!! Form::select('style', $container_styles, null, ['class'=>'form-control'])!!}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endoption
{!! BBstyle($_this->path.DS.'css'.DS.'settings.css') !!}
<script>
    $('#plus').click(function(){
        var exp_index = Number($('input#exp_count').val())+1;
        $('input#exp_count').val( Number($('input#exp_count').val())+1);

        $('.exp-panel').append("<div>\n" +
            "            <h3>Work Section# "+exp_index+"</h3>\n"+
            "            <div class=\"form-group\">\n" +
            "                <div class=\"col-md-4\">\n" +
            "                    <label for=\"\">Company Name</label>\n" +
            "                </div>\n" +
            "                <div class=\"col-md-8\">\n" +
            "                    <input type='text' name='company_name"+exp_index+"' class='form-control' />\n" +
            "                </div>\n" +
            "                <div class=\"clearfix\"></div>\n" +
            "            </div>\n" +
            "            <div class=\"form-group\">\n" +
            "                <div class=\"col-md-4\">\n" +
            "                    <label for=\"\">Position</label>\n" +
            "                </div>\n" +
            "                <div class=\"col-md-8\">\n" +
            "                   <input type='text' name='position"+exp_index+"' class='form-control' />\n" +
            "                </div>\n" +
            "                <div class=\"clearfix\"></div>\n" +
            "            </div>\n" +
            "            <div class=\"form-group\">\n" +
            "                <div class=\"col-md-4\">\n" +
            "                    <label for=\"\">Description</label>\n" +
            "                </div>\n" +
            "                <div class=\"col-md-8\">\n" +
            "                   <textarea style='height: 200px' name='desc'"+exp_index+" class='form-control'></textarea>\n" +
            "                </div>\n" +
            "                <div class=\"clearfix\"></div>\n" +
            "            </div>\n" +
            "        </div>");
            $("#right-settings-main-box-bty").animate({ scrollTop: $('#right-settings-main-box-bty').prop("scrollHeight")}, 1000);

    })
</script>



