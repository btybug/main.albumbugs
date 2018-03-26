@extends('btybug::layouts.admin')
@section('content')
    <div class="col-md-12">
        <h3>Edit product {name}</h3>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="row">
                <div class="col-xs-12">
                        <div class="row module_detail">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <img src="{!! url('images/module.jpg') !!}" alt=""
                                     class="img-rounded img-responsive"/>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="module-title"> name: Get Logged User</div>
                                <div class="module-title"> version: V1</div>
                                <div class="module-desc">
                                   Here is description
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 pull-right text-right m-t-20">
                                {{--@if(isset($module->have_setting) and $module->have_setting==1)--}}
                                <a href="#"
                                   class="btn  btn-sm  m-b-5 p-l-20 p-r-20 width-150 text-left settings"><i
                                            class="fa fa-pencil f-s-14 m-r-10"></i> Settings</a>
                                {{--@endif--}}
                                <a href="#"
                                   class="btn  btn-sm  m-b-5 p-l-20 p-r-20 width-150 text-left"><i
                                            class="fa fa-cogs f-s-14 m-r-10"></i>Explore</a>
                            </div>
                        </div>

                        <div class="row module_detail_link">
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 m-t-10 m-b-10">
                                <a href="{!! 'Author' !!}"
                                   class="module_detail_author_link">{!!'Site Url' !!}</a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 module_author_detail m-t-10 m-b-10">
                                <div class="pull-left">
                                    <i class="fa fa-bars f-s-15" aria-hidden="true"></i>
                                    Version {!! 'version' !!}
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-user f-s-15" aria-hidden="true"></i>
                                    {!! 'Author'!!}
                                </div>
                            </div>
                        </div>
                </div>

            </div>
                <div class="row">
                    <div class="m-t-15 col-xs-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#conf"
                                                                      aria-controls="conf" role="tab"
                                                                      data-toggle="tab">Config</a></li>
                            <li role="presentation" class=""><a href="#installed_add_ons"
                                                                      aria-controls="installed_add_ons" role="tab"
                                                                      data-toggle="tab">Permissions</a></li>
                            <li role="presentation"><a href="#related_add_ons" aria-controls="related_add_ons"
                                                       role="tab"
                                                       data-toggle="tab">Documentation</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content m-t-15">
                            <div role="tabpanel" class="tab-pane active" id="conf">
                                <div class="col-md-12">
                                    <h3>Type: </h3>
                                    {!! Form::select('method',[
                                        'get' => 'GET',
                                        'insert' => 'Insert',
                                        'update' => 'update',
                                        'delete' => 'Delete'
                                    ],null,['class' => 'form-control']) !!}
                                </div>
                                @php
                                    $columns = BBGetTableColumn('users')
                                @endphp
                                <div class="col-md-12">
                                    <h3>Select User Columns</h3>
                                    @foreach($columns as $col)
                                        {{ $col }} {!! Form::checkbox("columns[$col]",null) !!}
                                    @endforeach
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="installed_add_ons">

                            </div>
                            <div role="tabpanel" class="tab-pane" id="related_add_ons">
                                <table class="table addon-list table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Version</th>
                                        <th class="text-center">Authors</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>

                                <p></p>

                            </div>
                        </div>

                    </div>
                </div>
        </div>

    </div>

@stop
@section('CSS')
    {!! HTML::style('public/css/new-store.css') !!}
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