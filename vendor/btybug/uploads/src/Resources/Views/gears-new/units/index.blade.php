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
        <form class="form-inline" name="input" method="get" action="#" id="filter-tables">
            <div class="bty-filter-tab bty-filter-blue">
                <h1>Filters</h1>
                <ul>
                    <li>
                        <input type="checkbox">
                        <i></i>
                        <h2>Date</h2>
                        <div>
                            <div>
                                <div class="bty-new-input-radio">
                                    <input name="bty-date" type="radio" id="bty-date-1">
                                    <label for="bty-date-1">All 1</label>
                                </div>
                                <div class="bty-new-input-radio">
                                    <input name="bty-date" type="radio" id="bty-date-2">
                                    <label for="bty-date-2">All 2</label>
                                </div>
                            </div>
                            <div class="calendar">
                                <span><i class="glyphicon glyphicon-calendar"></i></span>
                                <input type="date">
                                <span> - </span>
                                <input type="date">
                                <span><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <input type="checkbox">
                        {{--<input type="checkbox" checked>--}}
                        <i></i>
                        <h2>Persons</h2>
                        <div>
                            <div>
                                <div class="bty-new-input-radio">
                                    <input name="bty-persons" type="radio" id="bty-persons-1">
                                    <label for="bty-persons-1">All 1</label>
                                </div>
                                <div class="bty-new-input-radio">
                                    <input name="bty-persons" type="radio" id="bty-persons-2">
                                    <label for="bty-persons-2">All 2</label>
                                </div>
                            </div>
                            <div class="bty-new-select">
                                <select>
                                    <option>Choose Option</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                </select>
                            </div>
                        </div>
                    </li>
                    <li>
                        <input type="checkbox">
                        <i></i>
                        <h2>Files Types</h2>
                        <div>
                            <div>
                                <div class="bty-new-input-radio">
                                    <input name="bty-type" type="radio" id="bty-type-1">
                                    <label for="bty-type-1">All 1</label>
                                </div>
                                <div class="bty-new-input-radio">
                                    <input name="bty-type" type="radio" id="bty-type-2">
                                    <label for="bty-type-2">All 2</label>
                                </div>
                            </div>
                            <div class="bty-new-select">
                                <select>
                                    <option>Choose Option</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                </select>
                            </div>
                        </div>
                    </li>
                </ul>
                <button type="submit">Search</button>
            </div>
        </form>
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
@stop
<style>
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

    /*Filter tab*/
    .bty-filter-tab {
        min-height: 0;
        display: inline-block;
        box-shadow: 0 10px 0 0 #616060 inset;
        background-color: #737373;
        max-width: 450px;
        padding: 30px;
        width: 100%;
    }

    .bty-filter-tab h1, .bty-filter-tab h2 {
        color: #888888;
    }

    .bty-filter-tab h1 {
        text-transform: uppercase;
        font-size: 36px;
        line-height: 42px;
        letter-spacing: 3px;
        font-weight: 100;
        color: white;
    }

    .bty-filter-tab h2 {
        font-size: 16px;
        line-height: 43px;;
        font-weight: 300;
        letter-spacing: 1px;
        display: block;
        background-color: #525252;
        margin: 0;
        cursor: pointer;
        color: #ccc;
        padding-left: 10px;
    }

    .bty-filter-tab ul>li >div {
        color: #e2e2e2;
        font-size: 16px;
        letter-spacing: 1px;
        position: relative;
        overflow: hidden;
        max-height: 800px;
        opacity: 1;
        transform: translate(0, 0);
        z-index: 2;
        background-color: #5252525c;
    }
    .bty-filter-tab ul>li >div >div:first-of-type{
        text-align: center;
        margin: 15px 0;
    }
    .bty-filter-tab ul>li >div >div:first-of-type .bty-new-input-radio{
        display: inline-block;
        padding: 0 15px;
    }
    .bty-filter-tab .bty-new-select{
        width: 80%;
        margin: 0 auto;
        margin-bottom: 15px;
        border-radius: 7px;
    }
    .bty-filter-tab .bty-new-select select{
        height: 36px;
        background-color: white;
        color: #555;
    }
    .bty-filter-tab .bty-new-select:after{
        color: #ccc;
        background-color: white;
    }

    .bty-filter-tab ul {
        list-style: none;
        padding: 0;
        margin: 0;
        padding-bottom: 25px;
        border-bottom: 2px solid #696969;
    }

    .bty-filter-tab ul li {
        position: relative;
        padding: 0;
        margin: 0;
        margin-bottom: 5px;
    }

    .bty-filter-tab ul li>i {
        position: absolute;
        transform: translate(-15px, 0);
        margin-top: 16px;
        right: 0;
    }

    .bty-filter-tab ul li>i:before, .bty-filter-tab ul li>i:after {
        content: "";
        position: absolute;
        background-color: #ccc;
        width: 3px;
        height: 9px;
    }

    .bty-filter-tab ul li>i:before {
        transform: translate(-2px, 0) rotate(45deg);
    }

    .bty-filter-tab ul li>i:after {
        transform: translate(2px, 0) rotate(-45deg);
    }

    .bty-filter-tab ul li input[type=checkbox] {
        position: absolute;
        cursor: pointer;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0;
    }

    .bty-filter-tab ul li input[type=checkbox]:checked ~ div {
        margin-top: 0;
        max-height: 0;
        opacity: 0;
        transform: translate(0, 50%);
    }

    .bty-filter-tab ul li input[type=checkbox]:checked +i:before {
        transform: translate(2px, 0) rotate(45deg);
    }

    .bty-filter-tab ul li input[type=checkbox]:checked +i:after {
        transform: translate(-2px, 0) rotate(-45deg);
    }
    .bty-filter-tab .calendar{
        display: table;
        margin-bottom: 15px;
        width: 100%;
        text-align: center;
    }
    .bty-filter-tab .calendar span{
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1;
        color: #ccc;
        text-align: center;
        background-color: #5a5a5a;
        border: 1px solid #ccc;
        vertical-align: middle;
    }
    .bty-filter-tab .calendar span:nth-of-type(1){
        border-radius: 5px 0 0 5px;
    }
    .bty-filter-tab .calendar span:nth-of-type(3){
        border-radius: 0 5px 5px 0;
    }
    .bty-filter-tab .calendar input{
        border: 1px solid #ccc;
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        display: table-cell;
        width: 25%;
    }
    .bty-filter-tab  button[type=submit]{
        float: right;
        margin-top: 30px;
        padding: 6px 30px;
        border-radius: 6px;
        background-color: #499bc7;
        border-style: none;
        color: white;
        font-size: 16px;
        transition: 0.5s ease;
    }
    .bty-filter-tab  button[type=submit]:hover{
        background-color: #477aa5;
    }
    .bty-filter-blue{
        box-shadow: 0 10px 0 0 #3a7798 inset;
        background-color: #499bc7;
    }
    .bty-filter-blue h2{
        background-color: #3a7798;
        color: white;
    }
    .bty-filter-blue >ul>li >div{
        background-color: #3a77985e;
    }
    .bty-filter-blue button[type=submit]{
        background-color: #3a7798;
    }
    .bty-filter-blue .calendar span{
        background-color: #448eb5;
        color: white;
    }
    .bty-filter-blue >ul{
        border-bottom: 2px solid #3a7798;
    }
    .bty-filter-blue ul li>i:before, .bty-filter-blue ul li>i:after {
        background-color: white;
    }

    .bty-new-input-radio input {
        display: none;
    }

    .bty-new-input-radio label {
        position: relative;
        cursor: pointer;
        padding-left: 28px;
    }

    .bty-new-input-radio label:before, .bty-new-input-radio label:after {
        content: "";
        position: absolute;
        border-radius: 50%;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .bty-new-input-radio label:before {
        top: 0;
        left: 0;
        width: 18px;
        height: 18px;
        background: rgba(73, 155, 199, 0.74);
        -moz-box-shadow: inset 0 0 0 18px #E0E0E0;
        -webkit-box-shadow: inset 0 0 0 18px #E0E0E0;
        box-shadow: inset 0 0 0 18px #E0E0E0;
    }

    .bty-new-input-radio label:after {
        top: 49%;
        left: 9px;
        width: 54px;
        height: 54px;
        opacity: 0;
        background: rgba(255, 255, 255, 0.3);
        -moz-transform: translate(-50%, -50%) scale(0);
        -ms-transform: translate(-50%, -50%) scale(0);
        -webkit-transform: translate(-50%, -50%) scale(0);
        transform: translate(-50%, -50%) scale(0);
    }

    .bty-new-input-radio input:checked + label:before {
        -moz-box-shadow: inset 0 0 0 4px #E0E0E0;
        -webkit-box-shadow: inset 0 0 0 4px #E0E0E0;
        box-shadow: inset 0 0 0 4px #E0E0E0;
    }

    .bty-new-input-radio input:checked + label:after {
        -moz-transform: translate(-50%, -50%) scale(1);
        -ms-transform: translate(-50%, -50%) scale(1);
        -webkit-transform: translate(-50%, -50%) scale(1);
        transform: translate(-50%, -50%) scale(1);
        -moz-animation: ripple 1s none;
        -webkit-animation: ripple 1s none;
        animation: bty-new-input-radio-ripple 1s none;
    }

    @-moz-keyframes bty-new-input-radio-ripple {
        5%, 100% {
            opacity: 0;
        }
        5% {
            opacity: 1;
        }
    }

    @-webkit-keyframes bty-new-input-radio-ripple {
        5%, 100% {
            opacity: 0;
        }
        5% {
            opacity: 1;
        }
    }

    @keyframes bty-new-input-radio-ripple {
        5%, 100% {
            opacity: 0;
        }
        5% {
            opacity: 1;
        }
    }
    .bty-new-select select {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        appearance: none;
        outline: 0;
        box-shadow: none;
        border: 0 !important;
        background: #4c7f9a;
        background-image: none;
    }

    .bty-new-select {
        position: relative;
        display: block;
        width: 100%;
        /*height: 100%;*/
        background: #4c7f9a;
        overflow: hidden;
    }

    .bty-new-select select {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0 0 0 .5em;
        color: #fff;
        cursor: pointer;
    }

    .bty-new-select select::-ms-expand {
        display: none;
    }

    .bty-new-select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        padding: 9px 12px;
        background: #34637b;
        pointer-events: none;
    }

    .bty-new-select:hover::after {
        color: #fff;
    }

    .bty-new-select::after {
        -webkit-transition: .25s all ease;
        -o-transition: .25s all ease;
        transition: .25s all ease;
    }
</style>
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
