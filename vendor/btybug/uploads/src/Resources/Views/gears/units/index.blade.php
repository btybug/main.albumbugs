@extends('btybug::layouts.mTabs',['index'=>'upload_gears'])
@section('tab')
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-info btn-sm pull-right btnUploadWidgets m-r-15 m-b-15" type="button"
                    data-toggle="modal"
                    data-target="#uploadfile">
                <i class="fa fa-cloud-upload module_upload_icon"></i> <span class="upload_module_text">Upload</span>
            </button>
        </div>
    </div>
    <div class="col-md-4 ">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-inline" name="input" method="get" action="#" id="filter-tables">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h4 class="muted">Date</h4>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio"> All Dates</label>
                                    </div>
                                    <p/>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio"> Especific Date</label>
                                    </div>
                                    <p></p>
                                    <div class="input-daterange input-group" id="datepicker">
                                        <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" class="input-sm form-control" name="start_date"/>
                                        <span class="input-group-addon"> - </span>
                                        <input type="text" class="input-sm form-control" name="end_date"/>
                                        <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h4 class="muted">Persons</h4>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio"> All Persons</label>
                                    </div>
                                    <p/>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio"> Especific Persons</label>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <select class="input-sm form-control">
                                                <option>Person Name 1</option>
                                                <option>Person Name 2</option>
                                                <option>Person Name 3</option>
                                                <option>Person Name 4</option>
                                                <option>Person Name 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h4 class="muted">Files Types</h4>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio"> All Files</label>
                                    </div>
                                    <p/>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio"> Especific Files</label>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <select class="input-sm form-control">
                                                <option>File Name 1</option>
                                                <option>File Name 2</option>
                                                <option>File Name 3</option>
                                                <option>File Name 4</option>
                                                <option>File Name 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8 ">
        <div class="row">
            <div class="col-xs-12 col-sm-12 unit-box">
                {{--@include('uploads::gears.units._partials.unit_box')--}}
            </div>
        </div>


        <div class="templates-list">
            <div class="row">
                <div class="raw tpl-list">
                    @include('uploads::gears.units._partials.unit_variations')
                </div>
            </div>
        </div>

        <div class="loadding"><em class="loadImg"></em></div>
        <nav aria-label="" class="text-center">
            <ul class="pagination paginationStyle">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <div class="text-center">
            <button type="button" class="btn btn-lg btn-primary btnLoadmore"><em class="loadImg"></em> Load more
            </button>
        </div>

    </div>

    <div class="modal fade" id="uploadfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Upload</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['url'=>'/admin/uploads/gears/upload','class'=>'dropzone', 'id'=>'my-awesome-dropzone']) !!}
                    {!! Form::hidden('data_type','files',['id'=>"dropzone_hiiden_data"]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @include('btybug::_partials.delete_modal')
@stop
@section('CSS')
    {!! HTML::style('public/css/new-store.css') !!}
    {!! HTML::style('public/js/bootstrap-select/css/bootstrap-select.min.css') !!}
    <style>
        .child-tpl {
            width: 95% !important;
        }

        .img-loader {
            width: 70px;
            height: 70px;
            position: absolute;
            top: 50px;
            left: 40%;
        }


        /*Unit 2*/
        .bty-unit-2 {
            float: left;
            /*padding: 0 1.7rem;*/
            width: 50%;
        }

        .bty-unit-2 ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        .custom_margin_5 {
            margin:5px;
        }
        .bty-unit-2 ul::before, .bty-unit-2 ul::after {
            content: '';
            display: table;
        }

        .bty-unit-2 ul::after {
            clear: both;
        }

        .bty-unit-2 ul li {
            display: inline-block;
        }

        .bty-unit-2 ul a {
            color: #fff;
        }

        .bty-unit-2 ul span {
            position: absolute;
            left: 50%;
            top: 0;
            font-size: 10px;
            font-weight: 700;
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
        }

        .bty-unit-2 > div {
            background-color: #fff;
            max-height: 365px;
            position: relative;
            overflow: hidden;
            /*box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.2);*/
        }

        .bty-unit-2 > div:hover div:last-child {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        .bty-unit-2 > div >div:last-child {
            position: absolute;
            bottom: 0;
            width: 100%;
            -webkit-transform: translateY(calc(70px + 1em));
            transform: translateY(calc(70px + 1em));
            -webkit-transition: -webkit-transform 0.3s;
            transition: -webkit-transform 0.3s;
            transition: transform 0.3s;
            transition: transform 0.3s, -webkit-transform 0.3s;
        }

        .bty-unit-2 > div >div:last-child > div {
            padding: 1em;
            position: relative;
            z-index: 1;
        }

        .bty-unit-2 > div >div:last-child > div > span {
            font-size: 30px;
        }

        .bty-unit-2 > div >div:last-child > div h5 {
            margin-top: 10px;
        }

        .bty-unit-2 > div >div:last-child > div p {
            height: 70px;
            margin: 0;
            color: #555;
        }

        .bty-unit-2 input[type='checkbox'] {
            display: none;
        }

        .bty-unit-2 input[type='checkbox']:checked + ul {
            -webkit-transform: translateY(-60px);
            transform: translateY(-60px);
        }

        .bty-unit-2 > div> div:first-child {
            position: absolute;
            top: 0;
            left: 0;
            background-color: #499bc7;
            color: #fff;
            padding: 0.8em;
        }

        .bty-unit-2 > div >div:first-child span {
            display: block;
            text-align: center;
        }

        .bty-unit-2 > div >div:first-child span:nth-of-type(1) {
            font-weight: 700;
            font-size: 24px;
            text-shadow: 2px 3px 2px rgba(0, 0, 0, 0.18);
        }

        .bty-unit-2 > div >div:first-child span:nth-of-type(2) {
            text-transform: uppercase;
        }

        .bty-unit-2 > div >div:first-child span:nth-of-type(2),
        .bty-unit-2 > div >div:first-child span:nth-of-type(3) {
            font-size: 12px;
        }

        .bty-unit-2 > div >div:last-child > div {
            background-color: #fff;
            box-shadow: 0 5px 30px 10px rgba(0, 0, 0, 0.3);
        }

        .bty-unit-2 > div> div:last-child h5 a {
            color: gray;
            font-size: 24px;
        }

        .bty-unit-2 > div >div:last-child h5 a:hover {
            text-decoration: none;
        }

        .bty-unit-2 > div >div:last-child > div label {
            position: absolute;
            z-index: 999;
            top: 16px;
            right: 16px;
            width: 25px;
            text-align: center;
            cursor: pointer;
        }

        .bty-unit-2 > div >div:last-child > div label span {
            width: 5px;
            height: 5px;
            background-color: gray;
            color: gray;
            position: relative;
            display: inline-block;
            border-radius: 50%;
        }

        .bty-unit-2 > div> div:last-child > div label span::after, .bty-unit-2 > div >div:last-child > div label span::before {
            content: '';
            display: block;
            width: 5px;
            height: 5px;
            background-color: currentColor;
            position: absolute;
            border-radius: 50%;
        }

        .bty-unit-2 > div> div:last-child > div label span::before {
            left: -10px;
        }

        .bty-unit-2 > div >div:last-child > div label span::after {
            right: -10px;
        }

        .bty-unit-2 > div >div:last-child>ul {
            text-align: center;
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            z-index: -1;
            -webkit-transition: -webkit-transform 0.3s;
            transition: -webkit-transform 0.3s;
            transition: transform 0.3s;
            transition: transform 0.3s, -webkit-transform 0.3s;
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 0;
        }
        .bty-unit-2 > div:hover>div:last-child>ul{
            opacity: 1;
        }

        .bty-unit-2 > div >div:last-child>ul li {
            width: 50%;
            float: left;
            background-color: #499bc7;
            height: 60px;
            position: relative;
        }

        .bty-unit-2 > div >div:last-child>ul a {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 24px;
        }

        .bty-unit-2 > div >div:last-child>ul span {
            top: -10px;
        }

        .bty-unit-2 > div >div:last-child > div span:first-child {
            text-align: left;
        }
        .bty-unit-2 > div> div:last-child > div>ul{
            margin:0;
            padding:0;
            list-style:none;
        }

        .bty-unit-2 > div >div:last-child > div>ul li, .bty-unit-2 > div div:last-child > div>ul a{
            float:left;
            height:24px;
            line-height:24px;
            position:relative;
            font-size:11px;
            margin-bottom: 5px;
        }

        .bty-unit-2 > div>div:last-child > div>ul a{
            margin-left:20px;
            padding:0 10px 0 12px;
            background:#499bc7;
            color:#fff;
            text-decoration:none;
            -moz-border-radius-bottomright:4px;
            -webkit-border-bottom-right-radius:4px;
            border-bottom-right-radius:4px;
            -moz-border-radius-topright:4px;
            -webkit-border-top-right-radius:4px;
            border-top-right-radius:4px;
        }

        .bty-unit-2 > div>div:last-child > div>ul a:before{
            content:"";
            float:left;
            position:absolute;
            top:0;
            left:-12px;
            width:0;
            height:0;
            border-color:transparent #499bc7 transparent transparent;
            border-style:solid;
            border-width:12px 12px 12px 0;
        }

        .bty-unit-2 > div>div:last-child > div>ul a:after{
            content:"";
            position:absolute;
            top:10px;
            left:0;
            float:left;
            width:4px;
            height:4px;
            -moz-border-radius:2px;
            -webkit-border-radius:2px;
            border-radius:2px;
            background:#fff;
            -moz-box-shadow:-1px -1px 2px #004977;
            -webkit-box-shadow:-1px -1px 2px #004977;
            box-shadow:-1px -1px 2px #004977;
        }

        .bty-unit-2 > div>div:last-child > div>ul a:hover {
            background:#555;
        }

        .bty-unit-2 > div>div:last-child > div>ul a:hover:before {
            border-color:transparent #555 transparent transparent;
        }

    </style>
@stop
@section('JS')
    {!! HTML::script('public/js/dropzone/js/dropzone.js') !!}
    <script>
        Dropzone.options.myAwesomeDropzone = {
            init: function () {
                this.on("success", function (file) {
//                            location.reload();
                });
            }
        };

        function confirm_delete(data) {
            var r = confirm("Are you sure !!!");
            if (r == true) {
                var slug = $(data).data('slug');
                $.ajax({
                    url: '/admin/uploads/gears/delete',
                    data: {
                        slug: slug
                    }, headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                    dataType: 'json',
                    success: function (data) {
                        location.reload();
                    },
                    type: 'POST'
                });
            }
        }

        $(document).ready(function () {

            $('body').on("change", ".select-type", function () {
                var val = $(this).val();
                var url = window.location.pathname + "?type=" + val;

                window.location = url;
            });

            $('.rightButtons a').click(function (e) {
                e.preventDefault();
                $(this).addClass('active').siblings().removeClass('active');
            });

            $('.btnListView').click(function (e) {
                e.preventDefault();
                $('#viewType').addClass('listView');
            });

            $('.btnGridView').click(function (e) {
                e.preventDefault();
                $('#viewType').removeClass('listView');
            });


            $('.selectpicker').selectpicker();

            var p = "{!! $_GET['p'] or null !!}";

            if (p.length) {
                $("a[main-type=" + p + "]").click();
            }

        });

    </script>
@stop
