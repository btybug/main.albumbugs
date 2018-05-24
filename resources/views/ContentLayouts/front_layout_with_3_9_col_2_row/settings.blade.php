<?php
$container_styles = getDinamicStyle('containers');
$container_styles = '<option value="0">Select Class</option>' . $container_styles;
$placeholdersData = $model->placeholders;
$placeholders = [];
foreach ($placeholdersData as $key => $datum) {
    $placeholders[$key] = $datum['title'];
}
?>
<div class="col-md-12">
    @option("left_bar","s",$data)
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-4">
                    <label for="">Select style</label>
                </div>
                <div class="col-md-8">
                    <div class="input-group">
                        <div class="input-group-addon">Change</div>
                        <input type="text" readonly="readonly" data-id="" class="page-layout-title form-control"
                               title="" style="width: 100%; background: #fff;" value="Nothing Selected!!!"
                               data-original-title="info">
                        <div class="input-group-addon">
                            <button type="button" class="BBbuttons" data-type="frontend">Change</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-4">
                    <label for="">Select</label>
                </div>
                <div class="col-md-8">
                    <select name="ls_style" id="" class="form-control">
                        {!! $container_styles !!}
                    </select>
                </div>
            </div>
        </div>
    @endoption

    @option('left_bar','f',$data)
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Content</label>
            </div>
            <div class="col-md-8">
                {!! Form::select('ls_content_type',[null=>'Select Content Type',
                'unit'=>'Unit','hook'=>'HooK','editor'=>'Editor']
                ,null,['class'=>'form-control content_type','data-value'=>'left_side_bar']) !!}
            </div>
        </div>
    </div>

    <div id="main_content_select_left_side_bar_unit"
         class=" main_content_type_left_side_bar collapse in @if(issetReturn($settings,'ls_content_type') !=='unit') hide   @endif"
         data-type="unit" aria-expanded="true" style="">
        <div class="content bty-settings-panel">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="">Select Unit</label>
                    </div>
                    <div class="col-md-8">
                        {!! BBbutton2('unit','ls_unit',"frontend","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$settings]) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main_content_select_left_side_bar_hook"
         class=" main_content_type_left_side_bar collapse in @if(issetReturn($settings,'ls_content_type') !=='hook') hide   @endif"
         data-type="hook" aria-expanded="true" style="">
        <div class="content bty-settings-panel">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="">Select Hook</label>
                    </div>
                    <div class="col-md-8">
                        {!! BBbutton2('hook','ls_hook','hook',"Change",
                      ['class'=>'btn btn-default change-layout','data-name-prefix' => 'hooks','data-type'=>'frontend_sidebar',
                      'model'=>(isset($settings['hooks']) && isset($settings['hooks']['ls_hook'])) ? $settings['hooks']['ls_hook'] : null]) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endoption


    @option('top_right','f',$data)
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

    @option('top_right','s',$data)
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Select</label>
            </div>
            <div class="col-md-8">
                <select name="tr_style" id="" class="form-control">
                    {!! $container_styles !!}
                </select>
            </div>
        </div>
    </div>
    @endoption

    @option('main_right','s',$data)
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Select</label>
            </div>
            <div class="col-md-8">
                <select name="mr_style" id="" class="form-control">
                    {!! $container_styles !!}
                </select>
            </div>
        </div>
    </div>
    @endoption

    @option('main_right','f',$data)
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Content</label>
            </div>
            <div class="col-md-8">
                {!! Form::select('main_content_type',
                [null=>'Select Content Type','unit'=>'Unit','hook'=>'HooK','editor'=>'Editor'],
                null,['class'=>'form-control content_type','data-value'=>'main_right']) !!}
            </div>
        </div>
    </div>
    <div id="main_content_select_main_right_unit"
         class=" main_content_type_main_right collapse in @if(issetReturn($settings,'main_content_type') !=='unit') hide   @endif"
         data-type="unit" aria-expanded="true" style="">
        <div class="content bty-settings-panel">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="">Select Unit</label>
                    </div>
                    <div class="col-md-8">
                        {!! BBbutton2('unit','main_unit',"frontend","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$settings]) !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="main_content_select_main_right_hook"
         class=" main_content_type_main_right collapse in @if(issetReturn($settings,'main_content_type') !=='hook') hide   @endif"
         data-type="hook" aria-expanded="true" style="">
        <div class="content bty-settings-panel">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="">Select Hook</label>
                    </div>
                    <div class="col-md-8">
                        {!! BBbutton2('hook','main_hook','hook',"Change",
                       ['class'=>'btn btn-default change-layout','data-name-prefix' => 'hooks','data-type'=>'frontend_sidebar',
                       'model'=>(isset($settings['hooks']) && isset($settings['hooks']['main_hook'])) ? $settings['hooks']['main_hook'] : null]) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endoption

    @option('general','s',$data)
    <div class="general-settings-right">
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-10">
                <div class="col-sm-3">
                    <span>Desktop</span>
                </div>
                <div class="col-sm-3">
                    <span>L-Tablet</span>
                </div>
                <div class="col-sm-3">
                    <span>P-Tablet</span>
                </div>
                <div class="col-sm-3">
                    <span>Mobile</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-sm-2">
                    <span>Left Sidebar</span>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-3">
                        <select name="ls_desktop"  class="form-control">
                            <option value="col-lg-1" >1</option>
                            <option value="col-lg-2" >2</option>
                            <option value="col-lg-3" >3</option>
                            <option value="col-lg-4" >4</option>
                            <option value="col-lg-5" >5</option>
                            <option value="col-lg-6" >6</option>
                            <option value="col-lg-7" >7</option>
                            <option value="col-lg-8" >8</option>
                            <option value="col-lg-9" >9</option>
                            <option value="col-lg-10" >10</option>
                            <option value="col-lg-11" >11</option>
                            <option value="col-lg-12" >12</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="ls_l_table"  class="form-control">
                            <option value="col-md-1" >1</option>
                            <option value="col-md-2" >2</option>
                            <option value="col-md-3" >3</option>
                            <option value="col-md-4" >4</option>
                            <option value="col-md-5" >5</option>
                            <option value="col-md-6" >6</option>
                            <option value="col-md-7" >7</option>
                            <option value="col-md-8" >8</option>
                            <option value="col-md-9" >9</option>
                            <option value="col-md-10" >10</option>
                            <option value="col-md-11" >11</option>
                            <option value="col-md-12" >12</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="ls_p_table"  class="form-control">
                            <option value="col-sm-1" >1</option>
                            <option value="col-sm-2" >2</option>
                            <option value="col-sm-3" >3</option>
                            <option value="col-sm-4" >4</option>
                            <option value="col-sm-5" >5</option>
                            <option value="col-sm-6" >6</option>
                            <option value="col-sm-7" >7</option>
                            <option value="col-sm-8" >8</option>
                            <option value="col-sm-9" >9</option>
                            <option value="col-sm-10" >10</option>
                            <option value="col-sm-11" >11</option>
                            <option value="col-sm-12" >12</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="ls_mobile"  class="form-control">
                            <option value="col-xs-1" >1</option>
                            <option value="col-xs-2" >2</option>
                            <option value="col-xs-3" >3</option>
                            <option value="col-xs-4" >4</option>
                            <option value="col-xs-5" >5</option>
                            <option value="col-xs-6" >6</option>
                            <option value="col-xs-7" >7</option>
                            <option value="col-xs-8" >8</option>
                            <option value="col-xs-9" >9</option>
                            <option value="col-xs-10" >10</option>
                            <option value="col-xs-11" >11</option>
                            <option value="col-xs-12" >12</option>
                        </select>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                    <span>Right Content</span>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-3">
                        <select name="rc_desktop"  class="form-control">
                            <option value="col-lg-1" >1</option>
                            <option value="col-lg-2" >2</option>
                            <option value="col-lg-3" >3</option>
                            <option value="col-lg-4" >4</option>
                            <option value="col-lg-5" >5</option>
                            <option value="col-lg-6" >6</option>
                            <option value="col-lg-7" >7</option>
                            <option value="col-lg-8" >8</option>
                            <option value="col-lg-9" >9</option>
                            <option value="col-lg-10" >10</option>
                            <option value="col-lg-11" >11</option>
                            <option value="col-lg-12" >12</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="rc_l_table"  class="form-control">
                            <option value="col-md-1" >1</option>
                            <option value="col-md-2" >2</option>
                            <option value="col-md-3" >3</option>
                            <option value="col-md-4" >4</option>
                            <option value="col-md-5" >5</option>
                            <option value="col-md-6" >6</option>
                            <option value="col-md-7" >7</option>
                            <option value="col-md-8" >8</option>
                            <option value="col-md-9" >9</option>
                            <option value="col-md-10" >10</option>
                            <option value="col-md-11" >11</option>
                            <option value="col-md-12" >12</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="rc_p_table"  class="form-control">
                            <option value="col-sm-1" >1</option>
                            <option value="col-sm-2" >2</option>
                            <option value="col-sm-3" >3</option>
                            <option value="col-sm-4" >4</option>
                            <option value="col-sm-5" >5</option>
                            <option value="col-sm-6" >6</option>
                            <option value="col-sm-7" >7</option>
                            <option value="col-sm-8" >8</option>
                            <option value="col-sm-9" >9</option>
                            <option value="col-sm-10" >10</option>
                            <option value="col-sm-11" >11</option>
                            <option value="col-sm-12" >12</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="rc_mobile"  class="form-control">
                            <option value="col-xs-1" >1</option>
                            <option value="col-xs-2" >2</option>
                            <option value="col-xs-3" >3</option>
                            <option value="col-xs-4" >4</option>
                            <option value="col-xs-5" >5</option>
                            <option value="col-xs-6" >6</option>
                            <option value="col-xs-7" >7</option>
                            <option value="col-xs-8" >8</option>
                            <option value="col-xs-9" >9</option>
                            <option value="col-xs-10" >10</option>
                            <option value="col-xs-11" >11</option>
                            <option value="col-xs-12" >12</option>
                        </select>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    @endoption
</div>
{!!BBstyle($model->path.DS.'css/settings.css') !!}
<script>
    $(function () {
        $('.content_type').on('change', function () {
            var panel = $(this).data('value');
            $('.main_content_type_' + panel).addClass('hide');
            var id = '#main_content_select_' + panel + '_' + $(this).val();
            $(id).removeClass('hide');
        });
    });
</script>