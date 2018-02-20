@extends('btybug::layouts.admin')
@section('content')
    <div class="main_lay_cont">
        {{--<div class="row for_title_row">--}}
        {{--<h1 class="text-center">Components</h1>--}}
        {{--</div>--}}
        <div class="col-md-3">

        </div>
        <div class="col-md-9">
            <div class=" headar-btn">
                <div></div>
                <div>
                    <a href="#" class="btn btn-info"><i class="fa fa-plus"></i></a>
                </div>
            </div>

            <div class="form-comp col-md-12">
                <form action="">
                    <div class="col-md-7">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="">Class Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="">Class Code</label>
                            </div>
                            <div class="col-md-8">
                        <textarea name="" id="" cols="30" rows="10" class="form-control">

                        </textarea>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <button class="btn btn-lg btn-success pull-right">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row layouts_row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                @include("framework::css._partials.left_menu")
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                @include("framework::css._partials.$slug")
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
            background-color: #78909c87;
            color: white;
            padding: 20px;
        }

        .form-comp textarea {
            height: 150px !important;
        }
    </style>
@stop
@section('JS')
    {!! HTML::script('public/js/bty.js?v='.rand(1111,9999)) !!}
@stop
