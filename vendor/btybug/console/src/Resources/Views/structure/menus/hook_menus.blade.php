@extends('btybug::layouts.admin')
@section('content')
    <div class="bb-menu-container">
        <div class="container-fluid">
            <!-- Settings -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading menu-panel">
                            <h3 class="panel-title pull-left">
                                <label>{!! $menu['title'] !!}</label>
                            </h3>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Menu -->
            <div class="row">
                <div class="col-md-10">
                    <ol class="bb-sortable-static">
                        <li data-id="1" id="menu-item-1">
                            <div class="bb-menu-item">
                                <div class="bb-menu-item-title">
                                    <i></i>
                                    <span>{!! $menu['title'] !!}</span>

                                    <div class="bb-menu-actions pull-right">
                                        <a href="javascript:" class="bb-menu-delete">
                                            <i class="fa fa-close"></i>
                                        </a>
                                        <a href="javascript:" class="bb-menu-collapse">
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @foreach($menu['children'] as $child)
                        <li data-id="2" id="menu-item-2" class="level-1">
                            <div class="bb-menu-item">
                                <div class="bb-menu-item-title">
                                    <i></i>
                                    <span>{!! $child['title'] !!}</span>

                                    <div class="bb-menu-actions pull-right">
                                        <a href="javascript:" class="bb-menu-delete">
                                            <i class="fa fa-close"></i>
                                        </a>
                                        <a href="javascript:" class="bb-menu-collapse">
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                    {{--<ol class="bb-sortable-static bb-sortable-group">--}}
                       {{--{!! dd($menu) !!}--}}
                    {{--</ol>--}}
                </div>
            </div>
        </div>
    </div>
@stop
{{--@include('tools::common_inc')--}}
@section('CSS')
    {{--{!! HTML::style('public/css/bootstrap/css/bootstrap-switch.min.css') !!}--}}
    {!! HTML::style('public/css/font-awesome/css/fontawesome-iconpicker.min.css') !!}
    {!! HTML::style('public/css/menus.css') !!}

@stop

@section('JS')
    {{--{!! HTML::script('public/js/jquery.mjs.nestedSortable.js') !!}--}}
    {{--{!! HTML::script('public/css/bootstrap/js/bootstrap-switch.min.js') !!}--}}
    {!! HTML::script('public/css/font-awesome/js/fontawesome-iconpicker.min.js') !!}
    {{--{!! HTML::script('public/js/menus.js') !!}--}}
@stop