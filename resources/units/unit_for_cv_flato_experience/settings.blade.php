<?php
$container_styles = getDinamicStyle('containers');
$image_styles = getDinamicStyle('images');
$text_styles = getDinamicStyle('texts');
?>
@option('general','f',$data)
<div class="bty-settings-panel">
    <div class="exp-panel">
        @if(isset($settings['work']))
         @foreach($settings['work'] as $key=>$work)
                <div class="bty-panel-collapse {{$key}}">
                    <div>
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne-{{$key}}" aria-expanded="true">
                            <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                            <span class="title">Work Section# {{$key}}</span>
                        </a>
                        <a href="#" id="{{$key}}" class="btn btn-sm btn-danger delete"><i class="fa fa-minus"></i></a>
                    </div>
                    <div id="collapseOne-{{$key}}" class="collapse" aria-expanded="true" style="">
                        <div class="content-panel">
                            <div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="">Company Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('work['.$key.'][company_name]', issetReturn($work,'company_name'),['class'=>'form-control ']) !!}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="">Position</label>
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('work['.$key.'][position]', issetReturn($work,'position'),['class'=>'form-control ']) !!}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="">Description</label>
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::textarea('work['.$key.'][desc]', issetReturn($work,'desc'), ['class'=>'form-control ']) !!}
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
                                            {!! Form::text('work['.$key.'][from]', issetReturn($work,'from'), ['class'=>'form-control ']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-4 text-right">
                                            <label for="">To</label>
                                        </div>
                                        <div class="col-md-8">
                                            {!! Form::text('work['.$key.'][to]', issetReturn($settings,'to'), ['class'=>'form-control ']) !!}
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

        @endforeach
    @endif
    </div>
    <input type="text" name="exp_count" id="exp_count" value="@if(isset($settings['exp_count'])){{$settings['exp_count']}}@else {{0}} @endif" style="display: none" />

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
    $('a.delete').click(function(){
        console.log($("div."+$(this).attr('id')));
        $("div."+$(this).attr('id')).remove();
    })
    $('#plus').click(function(){
        var exp_index = Number($('input#exp_count').val())+1;
        $('input#exp_count').val( Number($('input#exp_count').val())+1);

        $('.exp-panel').append("<div class=\"bty-panel-collapse "+exp_index+"\">\n" +
            "                    <div>\n" +
            "                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne-"+exp_index+"\" aria-expanded=\"true\">\n" +
            "                            <span class=\"icon\"><i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i></span>\n" +
            "                            <span class=\"title\">Work Section# "+exp_index+"</span>\n" +
            "                        </a>\n" +
            "                        <a href=\"#\" id=\""+exp_index+"\" class=\"btn btn-sm btn-danger delete\"><i class=\"fa fa-minus\"></i></a>\n" +
            "                    </div>\n" +
            "                    <div id=\"collapseOne-"+exp_index+"\" class=\"collapse\" aria-expanded=\"true\" style=\"\">\n" +
            "                        <div class=\"content-panel\">\n" +
            "                            <div>\n" +
            "                                <div class=\"form-group\">\n" +
            "                                    <div class=\"col-md-4\">\n" +
            "                                        <label for=\"\">Company Name</label>\n" +
            "                                    </div>\n" +
            "                                    <div class=\"col-md-8\">\n" +
            "                                        <input type='text' name='work["+exp_index+"][company_name]' class='form-control' />\n" +
            "                                    </div>\n" +
            "                                    <div class=\"clearfix\"></div>\n" +
            "                                </div>\n" +
            "                                <div class=\"form-group\">\n" +
            "                                    <div class=\"col-md-4\">\n" +
            "                                        <label for=\"\">Position</label>\n" +
            "                                    </div>\n" +
            "                                    <div class=\"col-md-8\">\n" +
            "                                        <input type='text' name='work["+exp_index+"][position]' class='form-control' />\n" +
            "                                    </div>\n" +
            "                                    <div class=\"clearfix\"></div>\n" +
            "                                </div>\n" +
            "                                <div class=\"form-group\">\n" +
            "                                    <div class=\"col-md-4\">\n" +
            "                                        <label for=\"\">Description</label>\n" +
            "                                    </div>\n" +
            "                                    <div class=\"col-md-8\">\n" +
            "                                        <textarea style='height: 200px' name='work["+exp_index+"][desc]' class='form-control'></textarea>\n" +
            "                                    </div>\n" +
            "                                    <div class=\"clearfix\"></div>\n" +
            "                                </div>\n" +
            "                                <h4>Period</h4>\n" +
            "                                <div class=\"form-group\">\n" +
            "                                    <div class=\"col-md-6\">\n" +
            "                                        <div class=\"col-md-4 text-right\">\n" +
            "                                            <label for=\"\">From</label>\n" +
            "                                        </div>\n" +
            "                                        <div class=\"col-md-8\">\n" +
            "                                            <input type='text' name='work["+exp_index+"][from]' class='form-control' />\n" +
            "                                        </div>\n" +
            "                                    </div>\n" +
            "                                    <div class=\"col-md-6\">\n" +
            "                                        <div class=\"col-md-4 text-right\">\n" +
            "                                            <label for=\"\">To</label>\n" +
            "                                        </div>\n" +
            "                                        <div class=\"col-md-8\">\n" +
            "                                            <input type='text' name='work["+exp_index+"][to]' class='form-control' />\n" +
            "                                        </div>\n" +
            "                                    </div>\n" +
            "                                    <div class=\"clearfix\"></div>\n" +
            "                                </div>\n" +
            "                            </div>\n" +
            "                        </div>\n" +
            "                    </div>\n" +
            "                </div>");
            $("#right-settings-main-box-bty").animate({ scrollTop: $('#right-settings-main-box-bty').prop("scrollHeight")}, 1000);
            $('a.delete').click(function(){
                $("div."+$(this).attr('id')).remove();
            })

    })
</script>



