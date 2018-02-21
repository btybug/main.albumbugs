<?php
$container_styles = getDinamicStyle('containers')
?>
<div class="bty-panel-collapse">
    <div>
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#main_content"
           aria-expanded="true">
            <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
            <span class="title">Main content</span>
        </a>
    </div>
    <div id="main_content" class="collapse in" aria-expanded="true" style="">
        <div class="content bty-settings-panel">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="">Select container style</label>
                    </div>
                    <div class="col-md-8">
                        <select name="main_content_style" id="" class="form-control">
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
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#top_content"
           aria-expanded="true">
            <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
            <span class="title">Top content</span>
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
            <span class="title">Left Areas Unit</span>
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