@extends('btybug::layouts.admin')
@include('resources::assests.magicModal')
@section('content')
    <div role="tabpanel" class="m-t-10" id="main">
            <div class="head-top">
                {!! Form::model($hook,['url' => route('frontsite_hooks_edit_save',$hook->id)]) !!}
                <div class="col-md-3">
                    {!! Form::text('name',$hook->name,["class" => "form-control"]) !!}
                </div>
                <div class="col-md-3">
                    {!! Form::select('type',["Vertical"=>"Vertical",'Horizontal'=>"Horizontal"],$hook->type,["class"=>"form-control is_horizontal"]) !!}
                </div>
                <div class="col-md-6">
                    <button class="btn btn-info pull-right">Save</button>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 custom_margin is_show {{$hook->type=="Vertical" ? 'custom_hide' : ''}}">
                    <div class="bty-panel-collapse">
                        <div>
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#placeholder"
                               aria-expanded="true">
                                <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                <span class="title">Place holder</span>
                            </a>
                        </div>
                        <div id="placeholder" class="collapse in" aria-expanded="true" style="">
                            <div class="content bty-settings-panel">
                                @if(isset($settings['icons']))
                                    @foreach($settings['icons'] as $key => $value)
                                        <div class="form-group lets_each">
                                            <div class="col-md-4">
                                                <label for="fieldicon" class="col-sm-4 control-label text-left">Icon</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-slack"></i></span>
                                                        {!!Form::text('icons['.$key.'][icon]',$settings['icons'][$key]['icon'],['class' => 'form-control icp ic','readonly'])  !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="fieldicon" class="col-sm-4 control-label text-left">Url</label>
                                                <div class="col-sm-8">
                                                    {!!Form::text('icons['.$key.'][url]',$settings['icons'][$key]['url'],['class' => 'form-control url'])  !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="col-sm-4">Style</label>
                                                <div class="col-md-8">
                                                    <select name="icons[{{$key}}][style]" id="" class="form-control style">
                                                        {!! $icon_styles !!}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <button class="btn btn-danger pull-right remove_this"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="col-md-12 prepend_template">
                                    <button class="btn btn-primary pull-right render_icons"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>



    <div class="modal fade" id="view-unit" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Unit Preview</h4>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="full-page-view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button class="btn close-live-edit" data-dismiss="modal" aria-label="Close">
                    <span class="fa fa-power-off"></span>
                </button>
                <div class="modal-body">
                    <div class="live-edit-menu">
                        <div class="btn-group">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Action
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Some live action</a></li>
                                <li><a href="#">Some live Settings</a></li>
                                <li><a href="#">Some live etc</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="iframe-area"></div>
                </div>
            </div>
        </div>
    </div>


@stop
@section('CSS')
    <style>
        .head-top{
            padding: 12px 0;
            background: #78909C;
            margin: 0 -15px;
        }
        .head-top .name{
            margin-top: 7px;
            color: white;
        }
        .custom_margin{
            margin-top:30px;
        }
        .custom_hide{
            display:none;
        }
    </style>
    {!! HTML::style('public/css/menu.css?v=0.16') !!}
    {!! HTML::style('public/css/admin_pages.css') !!}
    {!! HTML::style('public/css/tool-css.css?v=0.23') !!}
    {!! HTML::style('public/css/page.css?v=0.15') !!}
@stop


@section('JS')

    <script type="template" id="temp1">
        <div class="form-group lets_each">
            <div class="col-md-7">
                {!! BBbutton2('menus','menu_area[{repl}]','frontend','Select Menu',['class'=>'form-control input-md ic','model'=>null]) !!}
            </div>
            <div class="col-md-4">
                <label for="" class="col-sm-3">Style</label>
                <div class="col-md-9">
                    <select name="menu_area[{repl1}][style]" id="" class="form-control style">
                        <option>Style 1</option>
                        <option>Style 2</option>
                    </select>
                </div>
            </div>
            <div class="col-md-1">
                <button class="btn btn-danger pull-right remove_this"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="clearfix"></div>
    </script>
    <script>
        window.onload = function(){
            var icons_index = {{isset($settings['icons']) ? count($settings['icons']) : 0}};
            $("body").delegate(".render_icons","click",function(e){
                e.preventDefault();
                var html = $("#temp1").html();
                html = html.replace('{repl}',icons_index).replace('{repl1}',icons_index);
                $(".prepend_template").before(html);
                return icons_index += 1;
            });
            $("body").delegate(".remove_this","click",function(e){
                e.preventDefault();
                $(this).parent().parent().remove();
                if(icons_index != 0){
                    icons_index -= 1;
                }
                $(".lets_each").each(function(index,item){
                    $(item).find("input.bb-button-realted-hidden-input").attr("name",'menu_area['+index+']');
                    $(item).find("select.style").attr("name",'menu_area['+index+'][style]');
                });
                $("input.url").trigger("keyup");
                return icons_index;
            });
            $("body").delegate(".is_horizontal","change",function(){
                var value = $(this).val();
                if(value == "Horizontal"){
                    $(".is_show").removeClass("custom_hide");
                }else{
                    $(".is_show").addClass("custom_hide");
                }
            });
        }
    </script>

    {!! HTML::script("/public/js/UiElements/bb_styles.js?v.5") !!}
    {!! HTML::script('public/js/admin_pages.js') !!}
    {!! HTML::script('public/js/nestedSortable/jquery.mjs.nestedSortable.js') !!}
    {!! HTML::script('public/js/bootbox/js/bootbox.min.js') !!}
    {!! HTML::script('public/js/icon-plugin.js?v=0.4') !!}
@stop
