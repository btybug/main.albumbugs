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
        {!! $units->links() !!}
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
