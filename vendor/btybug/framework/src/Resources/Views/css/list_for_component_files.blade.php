@extends('btybug::layouts.admin')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('error') }}</strong>
        </div>
    @endif
    <div class="main_lay_cont">
        {{--<div class="row for_title_row">--}}
        {{--<h1 class="text-center">Components</h1>--}}
        {{--</div>--}}
        <div class="col-md-3">

        </div>
        <div class="col-md-9">
            <div class=" headar-btn">
                <div>
                    {{\App\Http\Controllers\PhpJsonParser::renderName(explode("_",$slug))}}
                </div>
                <div>
                    <button class="btn btn-primary show_form_for_setting">Settings</button>
                    <button type="button" class="btn btn-info show_form"><i class="fa fa-plus"></i></button>
                </div>
            </div>


            <div class="form-comp col-md-12 custom_hidden is_show_for_setting">
                {!! Form::open(['url'=>route('save_style_with_html_component'),'method' => 'get']) !!}
                <div class="col-md-7">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="filename">Item name</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="filename" name="filename" class="form-control" value="{{\App\Http\Controllers\PhpJsonParser::renderName(explode("_",$slug))}}">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Item html</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="file_html" id="" cols="30" rows="10" class="form-control">{!! isset($style_from_db) ? $style_from_db->html : '' !!}</textarea>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <input type="hidden" name="type" value="{{ app('request')->input('type') }}">
                <div class="col-md-12">
                    @if($slug != "xl_large_text" && $slug != "l_text" && $slug != "m_text" && $slug != "s_text" && $slug != "xs_text" && $slug != "link_text" && $slug != "icons")
                        <button type="button" class="btn btn-danger pull-right btn-lg custom_margin_left delete_item_and_classes" data-name="{{$slug}}">Delete this item and its classes</button>
                    @endif
                    <button class="btn btn-lg btn-success pull-right">Save</button>
                </div>
                {!! Form::close() !!}
            </div>


            <div class="form-comp col-md-12 custom_hidden is_show">
                {!! Form::open(['url'=>route('save_style'),'method' => 'post',"class" => "submit_form_for_style"]) !!}
                    <div class="col-md-7">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="">Class Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="class_name" class="form-control this_very_classname">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="">Class Code</label>
                            </div>
                            <div class="col-md-8">
                                <textarea name="code" id="" cols="30" rows="10" class="form-control this_very_textarea"></textarea>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <input type="hidden" name="type" value="{{ app('request')->input('type') }}">
                    <div class="col-md-5">
                        <button class="btn btn-lg btn-success pull-right validate_textarea" type="button">Save</button>
                    </div>
                {!! Form::close() !!}
                <div class="clearfix"></div>
                <div class="alert alert-danger alert-block remove_hidden_for_error custom_hidden">
                    <strong>
                        Error: You have a css syntax error. Please be careful and write right content.
                        <br>Example<br>
                        <span>
                            color:#FF0000;<br>
                            font-size:25px;<br>
                            etc...<br>
                        </span>
                        <div class="clearfix"></div>
                    </strong>
                </div>
            </div>
        </div>

        <div class="row layouts_row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                @include("framework::css._partials.left_menu_for_component")
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                @include("framework::css._partials.partial_for_component_file")
            </div>
        </div>
    </div>
@stop
@section('CSS')
    {!! HTML::style('public/css/bty.css?v='.rand(1111,9999)) !!}
    {!! HTML::style('public/css/new-store.css') !!}
    <style>
        .main_lay_cont {
            min-height: 500px;
        }

        .headar-btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #78909C;
            color: #fff;
            padding: 10px 15px;
        }

        .form-comp {
            background-color: #a0a0a0;
            color: white;
            padding: 20px;
            position:absolute;
            z-index: 9999999;
            width:97%;
        }

        .form-comp textarea {
            height: 150px !important;
        }
        .custom_hidden{
            display: none;
        }
        .custom_div_width{
            width:200px;
            margin:10px 0px;
        }
        .code_textarea{
            height:130px!important;
        }
        .custom_margin_left{
            margin-left:15px;
        }
        .error{
            color:#a94442;
        }
    </style>
@stop
@section('JS')
    {!! HTML::script('public/js/bty.js?v='.rand(1111,9999)) !!}
@stop
