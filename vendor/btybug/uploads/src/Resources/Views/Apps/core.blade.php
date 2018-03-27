@extends('btybug::layouts.mTabs',['index'=>'upload_apps'])
@section('tab')
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 cms_module_list">
            <h3 class="menuText f-s-17">
                <span class="module_icon_main"></span>
            </h3>
            <hr>
            <ul class="list-unstyled menuList" id="components-list">
                @foreach($apps as $app)
                    <li class=" @if($selected->id== $app->id) active @endif ">
                        <a href="{!! route('core_apps',['p'=>$app->id]) !!}"> <span
                                    class="module_icon"></span> {!! $app->name !!}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            @if($selected)
                                <div class="col-md-7">
                                    <p>
                                        @if($selected->status)
                                            <a href="#" namespace="{!! $selected->id or null !!}" data-action="off"
                                               class="btn  btn-sm  m-b-5 p-l-20 p-r-20 width-150 text-left enb-disb deactivate"><i
                                                        class="fa fa-power-off f-s-14 m-r-10"></i> Deactivate</a>
                                        @else
                                            <a href="#" namespace="{!! $selected->id or null !!}" data-action="on"
                                               style="background: #7fff00;color: #000000"
                                               class="btn  btn-sm  m-b-5 p-l-20 p-r-20 width-150 text-left  enb-disb"><i
                                                        class="fa fa-plug f-s-14 m-r-10"></i>Activate</a>
                                        @endif
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="main_lay_cont">
                    <div class="layouts_row">

                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 items_links">
                            <a href="{!! url('#') !!}" class="ly_items">
                                <h3>Product1</h3>
                                <h2><i class="fa fa-columns" aria-hidden="true"></i></h2>
                            </a>
                            <div class="custom_btn">
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 items_links">
                            <a href="{!! url('#') !!}" class="ly_items">
                                <h3>Product2</h3>
                                <h2><i class="fa fa-television" aria-hidden="true"></i></h2>
                            </a>
                            <div class="custom_btn">
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                            </div>
                        </div>
                        @if($selected)
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 items_links">
                            <a href="javascript:void(0)" data-id="{{ $selected->id }}" class="ly_items add-product" data-toggle="modal" data-target="#addModal">
                                <h3>Add New</h3>
                                <h2><i class="fa fa-plus" aria-hidden="true"></i></h2>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info">Add</button>
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

        .add-product{
            background: black !important;
            color: white !important;
            border: 0;
        }

        .add-product h3, .add-product h2{
            color: #ffffff !important;
        }
        .custom_btn{
            display: flex;
        }
        .custom_btn a{
            width: 50%;
            border-radius: 0;
        }
        .layouts_row .ly_items{
            width: 100%;
            border-radius: 0;
            margin: 0 !important;
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