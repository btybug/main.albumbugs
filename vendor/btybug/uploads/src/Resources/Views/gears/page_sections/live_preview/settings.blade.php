@extends('btybug::layouts.sections')
@section('content')

    <div class="center-block" id="widget_container">
        {!! $html !!}
    </div>
    <textarea type="hidden" class="hide" id="hidden_data" hidden>{!! $json !!}</textarea>
    <div id="output-content" style="display: none"></div>
@stop

@section('settings')
    <div class="settings-bottom ">
        <div class="head">
            <span id="current-node-text">SELECT ELEMENT</span>

            <a href="#" class="float-right closeCSSEditor"><i class="fa fa-arrow-down"></i></a>
        </div>
        <div class="content animated bounceInRight hide" data-settinglive="settings">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-3">
                        <div class="left">
                            <ul>
                                <li>
                                    <div>
                                        <span class="left-li">Left Bar </span>
                                        <div class="button">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-warning">F</a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-info">S</a>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="left-li">Middle Area</span>
                                        <div class="button">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-info">S</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="left-li">Right Bar </span>
                                        <div class="button">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-warning">F</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="left-li">Somthing else</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-9">
                        <div class="right">
                            <form class="form-horizontal" action="">
                                <div class="form-group">
                                        <label class="control-label col-sm-2">Select Data</label>
                                        <div class="col-sm-10">
                                            <select name="" id="" class="form-control">
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="withoutifreamsetting animated bounceInRight hide" data-settinglive="settings">--}}
    {{--{!! Form::model($model,['id'=>'add_custome_page']) !!}--}}
    {{--@include($settingsHtml)--}}
    {{--{!! Form::close() !!}--}}
    {{--</div>--}}
    {{--<div class="modal fade" id="magic-settings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">--}}
    {{--{!! Form::open(['url'=>'/admin/backend/theme-edit/live-save', 'id'=>'magic-form']) !!}--}}
    {{--<div class="modal-dialog modal-lg" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header">--}}
    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span--}}
    {{--aria-hidden="true">&times;</span></button>--}}
    {{--{!! Form::submit('Save',['class' => 'btn btn-success pull-right m-r-10']) !!}--}}
    {{--<h4 class="modal-title" id="myModalLabel"></h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body" style="min-height: 500px;">--}}

    {{--<div id="magic-body">--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}
    {{--</div>--}}
@stop
@section('CSS')
    {!! HTML::style("https://jqueryvalidation.org/files/demo/site-demos.css") !!}
    {!! HTML::style('public/css/preview-template.css') !!}
    {!! HTML::style('public/js/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') !!}
    <style>
        .settings-bottom {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.76);
            /*height: 220px;*/
            color: white;
        }

        .settings-bottom .head {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            color: white;
            background-color: #090909;
        }

        .settings-bottom .head a {
            color: white;
        }

        .settings-bottom .content .left, .settings-bottom .content .right {
            overflow-x: auto;
            height: 170px;
            padding: 10px;
        }

        .settings-bottom .content {
            height: 170px;
        }

        .settings-bottom .content.hide {
            height: 0;
            overflow: hidden;
        }

        .settings-bottom .content .left::-webkit-scrollbar-track, .settings-bottom .content .right::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        .settings-bottom .content .left::-webkit-scrollbar, .settings-bottom .content .right::-webkit-scrollbar {
            width: 6px;
            background-color: #F5F5F5;
        }

        .settings-bottom .content .left::-webkit-scrollbar-thumb, .settings-bottom .content .right::-webkit-scrollbar-thumb {
            background-color: #000000;
        }

        .settings-bottom .content > .container-fluid > .row > [class*="col-"] {
            padding: 0;
        }

        .settings-bottom .content .left ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .settings-bottom .content .left ul li > div {
            background-color: #090909;
            border: 1px solid #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
            cursor: pointer;
            -webkit-transition: 0.5s ease;
            -moz-transition: 0.5s ease;
            -ms-transition: 0.5s ease;
            -o-transition: 0.5s ease;
            transition: 0.5s ease;
        }

        .settings-bottom .content .left ul li > div:hover {
            background-color: #fff;
            color: black;
        }
        .closeCSSEditor.top-show i{
            transform: rotate(180deg);
        }
    </style>
    @yield('CSS')
    @stack('css')
@stop
@section('JS')
    {!! HTML::script("public/js/UiElements/bb_styles.js?v=1") !!}
    {!! HTML::script("public/js/UiElements/bb_div.js") !!}
    {!! HTML::script("public/js/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js") !!}
    {!! HTML::script("https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js") !!}
    {!! HTML::script("https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js") !!}


    {!! HTML::script('public/js/UiElements/content-layout-settings.js?v=8') !!}
    <script>
        $(document).ready(function () {
            $('.closeCSSEditor').on('click', function () {
                if ($(this).closest('.head').next().hasClass("hide")) {
                    $(this).closest('.head').next().removeClass('hide');
                    $(this).removeClass('top-show')
                } else {
                    $(this).closest('.head').next().addClass('hide');
                    $(this).addClass('top-show')
                }

            })
        });
    </script>
@stop
