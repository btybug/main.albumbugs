<div class="form-group">
    <div class="row">
        <label for="navstyle" class="col-xs-3">Left Areas Unit</label>
        <div class="col-xs-9">
            <div class="input-group">
                {!! BBbutton2('unit',"left_bar","frontend_sidebar","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>null]) !!}
            </div>
        </div>
        <label for="navstyle" class="col-xs-3">Top content</label>
        <div class="col-xs-9">
            <div class="input-group">
                {!! BBbutton2('unit',"top_content","slider","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$model]) !!}
            </div>
        </div>
        <label for="navstyle" class="col-xs-3">Top hook</label>
        <div class="col-xs-9">
            <div class="input-group">
                {!! BBbutton2('unit',"top_hook","breadcrumb","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$model]) !!}
            </div>
        </div>
    </div>
</div>