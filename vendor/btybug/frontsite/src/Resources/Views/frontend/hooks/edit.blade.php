@extends('btybug::layouts.admin')
@section('content')
    <div role="tabpanel" class="m-t-10" id="main">
            <div class="head-top">
                <div class="col-md-3 name">
                    Hook Name
                </div>
                <div class="col-md-3">
                    <select name="" id="" class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-info pull-right">Save</button>
                </div>
                <div class="clearfix"></div>
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
    </style>
    {!! HTML::style('public/css/menu.css?v=0.16') !!}
    {!! HTML::style('public/css/admin_pages.css') !!}
    {!! HTML::style('public/css/tool-css.css?v=0.23') !!}
    {!! HTML::style('public/css/page.css?v=0.15') !!}
@stop


@section('JS')
    {!! HTML::script("/public/js/UiElements/bb_styles.js?v.5") !!}
    {!! HTML::script('public/js/admin_pages.js') !!}
    {!! HTML::script('public/js/nestedSortable/jquery.mjs.nestedSortable.js') !!}
    {!! HTML::script('public/js/bootbox/js/bootbox.min.js') !!}
    {!! HTML::script('public/js/icon-plugin.js?v=0.4') !!}
@stop
