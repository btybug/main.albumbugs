<?php
$container_styles = getDinamicStyle('containers');

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
        <div  class="collapse in" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Content</label>
                        </div>
                        <div class="col-md-8">
                            {!! Form::select('ls_content_type',[null=>'Select Content Type',
                            'unit'=>'Unit','hook'=>'HooK','main_content'=>'Main Content']
                            ,null,['class'=>'form-control content_type','data-value'=>'left_side_bar']) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="main_content_select_left_side_bar_unit"
             class=" main_content_type_left_side_bar collapse in @if(issetReturn($settings,'content_type') !=='unit') hide   @endif"
             data-type="unit" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select Unit</label>
                        </div>
                        <div class="col-md-8">
                            {!! BBbutton2('unit','ls_unit',"frontend","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$model]) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="main_content_select_left_side_bar_hook"
             class=" main_content_type_left_side_bar collapse in @if(issetReturn($settings,'content_type') !=='unit') hide   @endif"
             data-type="hook" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select Hook</label>
                        </div>
                        <div class="col-md-8">

                            @foreach($model->placeholders as $key=>$placeholder)
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="">Select {!! $placeholder['title'] !!}</label>
                                        </div>
                                        <div class="col-md-8">
                                            {!! BBbutton2('unit','hooks[ls_hook]['.$key.']',$placeholder['tag'],"Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$model]) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
        <div  class="collapse in" aria-expanded="true" style="">
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
        </div>
        <div id="main_content_select_top_right_unit"
             class=" main_content_type_top_right collapse in @if(issetReturn($settings,'content_type') !=='unit') hide   @endif"
             data-type="unit" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select Unit</label>
                        </div>
                        <div class="col-md-8">
                            {!! BBbutton2('unit','tr_unit',"frontend","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$model]) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="main_content_select_top_right_hook"
             class=" main_content_type_top_right collapse in @if(issetReturn($settings,'content_type') !=='unit') hide   @endif"
             data-type="hook" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select Hook</label>
                        </div>
                        <div class="col-md-8">

                            @foreach($model->placeholders as $key=>$placeholder)
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="">Select {!! $placeholder['title'] !!}</label>
                                        </div>
                                        <div class="col-md-8">
                                            {!! BBbutton2('unit','hooks[tr_hook]['.$key.']',$placeholder['tag'],"Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$model]) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
        <div  class="collapse in" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Content</label>
                        </div>
                        <div class="col-md-8">
                            {!! Form::select('main_content_type',
                            [null=>'Select Content Type','unit'=>'Unit','hook'=>'HooK','main_content'=>'Main Content'],
                            null,['class'=>'form-control content_type','data-value'=>'main_right']) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="main_content_select_main_right_unit"
             class=" main_content_type_main_right collapse in @if(issetReturn($settings,'main_unit') !=='unit') hide   @endif"
             data-type="unit" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select Unit</label>
                        </div>
                        <div class="col-md-8">
                            {!! BBbutton2('unit','main_unit',"frontend","Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$model]) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="main_content_select_main_right_hook"
             class=" main_content_type_main_right collapse in @if(issetReturn($settings,'content_type') !=='unit') hide   @endif"
             data-type="hook" aria-expanded="true" style="">
            <div class="content bty-settings-panel">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Select Hook</label>
                        </div>
                        <div class="col-md-8">

                            @foreach($model->placeholders as $key=>$placeholder)
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="">Select {!! $placeholder['title'] !!}</label>
                                        </div>
                                        <div class="col-md-8">
                                            {!! BBbutton2('unit','hooks[main_hook]['.$key.']',$placeholder['tag'],"Change",['class'=>'btn btn-default change-layout','data-type'=>'frontend_sidebar','model'=>$model]) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
        $('.content_type').on('change', function () {
            var panel=$(this).data('value');
            $('.main_content_type_'+panel).addClass('hide');
            var id='#main_content_select_'+panel+'_' + $(this).val();
            $(id).removeClass('hide');
        });
    });
</script>