@extends('btybug::layouts.mTabs',['index'=>'upload_apps'])
@section('tab')
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 cms_module_list">
            <h3 class="menuText f-s-17">
                <span class="module_icon_main"></span>
            </h3>
            <hr>
            <ul class="list-unstyled menuList" id="components-list">
                @foreach($plugins as $plugin)
                    <li class=" @if($selected->name==$plugin['name']) active @endif ">
                        <a href="{!! route('plugins_index',['p'=>$plugin['name']]) !!}"> <span
                                    class="module_icon"></span> {!! $plugin['name'] !!}</a>
                    </li>
                @endforeach
                <li class="active">
                    <a href="#"> <span class="module_icon"></span> Logged User</a>
                </li>
                <li class="">
                    <a href="#"> <span class="module_icon"></span> All Users</a>
                </li>
            </ul>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" namespace="#" data-action="off"
                               class="btn  btn-sm  m-b-5 p-l-20 p-r-20 width-150 text-left enb-disb deactivate pull-right"><i
                                        class="fa fa-power-off f-s-14 m-r-10"></i> Deactivate</a>

                            <a href="#" namespace="#"
                               class="btn  btn-sm  m-b-5 p-l-20 p-r-20 width-150 text-left enb-disb deactivate pull-right"><i
                                        class="fa fa-plus f-s-14 m-r-10"></i> Create product app</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="main_lay_cont">
                    <div class="row layouts_row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 items_links">
                            <a href="{!! url('#') !!}" class="ly_items">
                                <h3>Product1</h3>
                                <h2><i class="fa fa-columns" aria-hidden="true"></i></h2>
                            </a>
                            <div class="col-md-12">
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 items_links">
                            <a href="{!! url('#') !!}" class="ly_items">
                                <h3>Product2</h3>
                                <h2><i class="fa fa-television" aria-hidden="true"></i></h2>
                            </a>
                            <div class="col-md-12">
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('CSS')
    {!! HTML::style('public/css/new-store.css') !!}
    {!! HTML::style('public/css/backend_layouts_style.css') !!}

    <style>
        .pages.col-md-5 {
            border: 1px solid black;
            border-radius: 8px;
            text-align: center;
            height: 200px;
            background: antiquewhite;
            padding-top: 72px;
            margin: 7px;
            font-size: xx-large;
            font-family: fantasy;
        }
    </style>
@stop
@section('JS')
    <script>
        $(function () {
            $('body').on('click', '.enb-disb', function () {
                var namespace = $(this).attr('namespace');
                var action = $(this).attr('data-action');
                $.ajax({
                    url: '{!! route('on_off') !!}',
                    data: {
                        namespace: namespace,
                        action: action,
                        _token: $('input[name=_token]').val()
                    },
                    success: function (data) {
                        location.reload();
                    },
                    type: 'POST'
                });
            });
        })
    </script>
@stop