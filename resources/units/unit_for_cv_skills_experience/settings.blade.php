<?php
$container_styles = getDinamicStyle('containers');
?>
@option('general', 's', $data)
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
@option('skills', 'f', $data)
    <div id="collapseabout" class="collapse in" aria-expanded="true" style="">
        <div class="content">
            <div class="form-group my_rows1">
                <div class="col-sm-8">
                    {!! BBbutton2('unit',"area1","cv_skills","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$settings]) !!}
                </div>
            </div>
        </div>
    </div>
@endoption
@option('experience', 'f', $data)
    <div id="collapseskills" class="collapse in" aria-expanded="true" style="">
        <div class="content">
            <div class="form-group my_rows1">
                <div class="col-sm-8">
                    {!! BBbutton2('unit',"area2","cv_experience","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$settings]) !!}
                </div>
            </div>
        </div>
    </div>
@endoption

