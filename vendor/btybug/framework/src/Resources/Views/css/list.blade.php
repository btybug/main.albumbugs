@extends('btybug::layouts.admin')
@section('content')
    <div class="main_lay_cont">
        <div class="row for_title_row">
            <h1 class="text-center">Components</h1>
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
        .main_lay_cont{
            min-height: 500px;
        }
    </style>
@stop
@section('JS')
    {!! HTML::script('public/js/bty.js?v='.rand(1111,9999)) !!}
@stop
