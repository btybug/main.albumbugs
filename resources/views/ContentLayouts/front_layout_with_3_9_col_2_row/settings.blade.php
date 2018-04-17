<?php
$container_styles = getDinamicStyle('containers')
?>
<div class="col-md-12">
    <div class="bty-panel-collapse">
        <div>
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#main_content"
               aria-expanded="true">
                <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                <span class="title" content>Left Side Bar</span>
            </a>
        </div>
        <div id="main_content" class="collapse in" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Content</label>
                        </div>
                        <div class="col-md-8">
                            {!! Form::select('content_type',[null=>'Select Content Type','unit'=>'Unit','hook'=>'HooK','main_content'=>'Main Content'],null,['class'=>'form-control','id'=>'content_type']) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="main_content_select_unit" class=" main_content_type collapse in @if(issetReturn($settings,'content_type') !=='unit') hide   @endif" data-type="unit" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select Unit</label>
                        </div>
                        <div class="col-md-8">
                            {!! BBbutton2('content_type[selected]',"left_side_bar","sidebar","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$model]) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="main_content_select_hook" class=" main_content_type collapse in @if(issetReturn($settings,'content_type') !=='unit') hide   @endif" data-type="hook" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select Hook</label>
                        </div>
                        <div class="col-md-8">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bty-panel-collapse">
        <div>
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#top_content"
               aria-expanded="true">
                <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                <span class="title">Top Right</span>
            </a>
        </div>
        <div id="top_content" class="collapse in" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select menu</label>
                        </div>
                        <div class="col-md-8">
                            {!! BBbutton2('unit',"top_content","slider","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$model]) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Container style</label>
                        </div>
                        <div class="col-md-8">
                            <select name="top_content_style" id="" class="form-control">
                                {!! $container_styles !!}
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bty-panel-collapse">
        <div>
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#left_bar"
               aria-expanded="true">
                <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                <span class="title">Main Right</span>
            </a>
        </div>
        <div id="left_bar" class="collapse in" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select unit</label>
                        </div>
                        <div class="col-md-8">
                            {!! BBbutton2('unit',"left_bar","frontend_sidebar","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>null]) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Container style</label>
                        </div>
                        <div class="col-md-8">
                            <select name="left_bar_style" id="" class="form-control">
                                {!! $container_styles !!}
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
{!!BBstyle($model->path.DS.'css/settings.css') !!}
<script>
    $(function () {
        $('#content_type').on('change',function () {
            $('.main_content_type').addClass('hide');
            $('#main_content_select_'+$(this).val()).removeClass('hide');
            console.log($(this).val())
        });
    });
</script>