@option('name','f',$data)
<div class="content bty-settings-panel">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Content</label>
            </div>
            <div class="col-md-8">
                {!! Form::select('tr_content_type',
                [null=>'Select Content Type','unit'=>'Unit','hook'=>'HooK','main_content'=>'Main Content'],
                null,['class'=>'form-control content_type','data-value'=>'top_right']) !!}
            </div>
        </div>
    </div>
</div>

<div id="main_content_select_top_right_unit"
     class=" main_content_type_top_right collapse in @if(issetReturn($settings,'tr_content_type') !=='unit') hide   @endif"
     data-type="unit" aria-expanded="true" style="">
    <div class="content bty-settings-panel">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-4">
                    <label for="">Select Unit</label>
                </div>
                <div class="col-md-8">
                    {!! BBbutton2('unit','tr_unit',"frontend","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$settings]) !!}
                </div>
            </div>
        </div>

    </div>
</div>
<div id="main_content_select_top_right_hook"
     class=" main_content_type_top_right collapse in @if(issetReturn($settings,'tr_content_type') !=='hook') hide   @endif"
     data-type="hook" aria-expanded="true" style="">
    <div class="content bty-settings-panel">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-4">
                    <label for="">Select Hook</label>
                </div>
                <div class="col-md-8">
                    {!! BBbutton2('hook','tr_hook','hook',"Change",
                    ['class'=>'btn btn-default change-layout','data-name-prefix' => 'hooks','data-type'=>'frontend_sidebar',
                    'model'=>(isset($settings['hooks']) && isset($settings['hooks']['tr_hook'])) ? $settings['hooks']['tr_hook'] : null]) !!}
                </div>
            </div>
        </div>

    </div>
</div>
@endoption





