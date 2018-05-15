@extends('btybug::layouts.admin')
@section('content')
    <div class="col-md-12">
        <div class="col-md-12">
            <a href="{!! url(route('uploads_assets_profiles_js')) !!}" class="btn btn-active btn-lg pull-right">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Header JS
                        <button 
                            type="button" 
                            class="btn btn-xs btn-default pull-right add-assets">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add
                        </button>
                    </h3>
                </div>
                <div class="panel-body connectedSortable" id="header-js">

                    <div class="panel panel-default">
                        <div class="panel-heading draggable">
                            <h4 class="panel-title">
                                front-header.js
                            </h4>
                        </div>
                        <div class="panel-body">
                            <ul id="menus-list" class="connectedSortable">
                                @if(count($assets))
                                    @foreach($assets as $item)
                                        <li class="list-group-item auto-item" data-id="{{$item->path}}"
                                            data-name="{{ get_filename_from_path($item->path,DS) }}"
                                            data-link="{{ $item->path }}"
                                            data-type="{{$item->type}}">
                                            {{ get_filename_from_path($item->path,DS) }} (unit: {{ $item->page->slug }})

                                            <button type="button" class="btn btn-xs btn-danger pull-right">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                            </button>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-12 m-t-15">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Footer JS
                        <button 
                            type="button" 
                            class="btn btn-xs btn-default pull-right add-assets">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add
                        </button>
                    </h3>
                </div>
                <div class="panel-body connectedSortable" id="footer-js">

                </div>
            </div>
        </div>

        <div class="col-md-12 m-t-15">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Ignored Units Js
                    </h3>
                </div>
                <div class="panel-body connectedSortable" id="ignored-units-js">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="uploadAssets" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add assets</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['id' => 'assetsForm']) !!}
                    <div class="form-group">
                        {!! Form::label('files','Files') !!}
                        <div>
                            @if(count($mains))
                                @foreach( $mains as $item)
                                    <label class="checkbox-inline" data-path="{{ $item->path }}">
                                        {!! Form::checkbox('files[]',$item->id,null) !!} {{ $item->name }}
                                    </label>
                                @endforeach
                            @endif
                        </div>
                        <div>
                            @if(count($plugins))
                                @foreach( $plugins as $plugin)
                                    <label class="checkbox-inline" data-path="{{ $item->path }}">
                                        {!! Form::checkbox('files[]',$plugin->id,null) !!} {{ $plugin->name }}
                                    </label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary get-assets">Add asset</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('CSS')
    <style>
        #menus-list {
            min-height: 10px;
        }

        .list-group-item {
            margin-bottom: 5px;
            cursor: pointer;
            padding-left: 48px;
        }

        .list-group-item:before {
            content: "\e068";
            font-size: 19px;
            cursor: move;
            text-align: center;
            line-height: 43px;
            color: white;
            position: absolute;
            font-family: 'Glyphicons Halflings';
            left: -1px;
            top: -1px;
            width: 42px;
            height: 42px;
            background-color: #484848;
        }

        #uploadAssets .form-group > label {
            font-weight: bold !important;
        }

        .draggable {
            cursor: move;
        }
    </style>
@stop

@section('JS')
    <script src="/public/js/jquery-ui/jquery-ui.min.js"></script>
    <script>
        var sectionOfaddedItem, submitJSON;
        $(document).ready(function () {
            $("body").on('click', '.add-assets', function () {
                sectionOfaddedItem = $(this).parent().parent().next().attr('id');
                $("#uploadAssets").modal();
            });

            $("body").on('click', '.get-assets', function () {
                var data = $("#assetsForm").serialize();
                $.ajax({
                    type: "post",
                    url: "{!! route('uploads_assets_profiles_get_assets') !!}",
                    cache: false,
                    datatype: "json",
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $("[name=_token]").val()
                    },
                    success: function (data) {
                        for (let item of data){
                            addAssetToDOM(item, sectionOfaddedItem);
                        }
                        $("#uploadAssets").modal('hide');
                    }
                });
            });

            $("body").on("change", ".generate", function () {
                var id = $(this).data('id');
                var name = $(this).attr("name");
                var value = this.checked ? 1 : 0;
                $.ajax({
                    type: "post",
                    url: "{!! url('/admin/framework/generate-main-js') !!}",
                    cache: false,
                    datatype: "json",
                    data: {
                        id: id,
                        name: name,
                        value: value
                    },
                    headers: {
                        'X-CSRF-TOKEN': $("[name=_token]").val()
                    },
                    success: function (data) {
                        if (!data.error) {
                        }
                    }
                });
            });
            $("#header-js, #menus-list, #footer-js, #ignored-units-js").sortable({
                connectWith: ".connectedSortable",
                change: function() {
                    clearTimeout(submitJSON);
                },
                sort: function() {
                    clearTimeout(submitJSON);
                },
                stop: function( event, ui ) {
                    submitAssets();
                }
            }).disableSelection();
        });

        function addAssetToDOM( item, sectionOfaddedItem ){
            var $buttonDelete = $("<button>", {
                "class": "btn btn-xs btn-default pull-right",
                "type": "button"
            }).append('</span>').addClass('glyphicon glyphicon-trash').click(function() {
                $(this).parent().remove();
                submitAssets();
            });

            var $div = $("<li>", {
                "class": "list-group-item added-item",
                "data-name": item.file_name,
                "data-type": item.type,
                "data-link": item.path,
                "data-id": item.path
            }).text(item.file_name).append($buttonDelete).prependTo('#'+sectionOfaddedItem);

            submitAssets();
        }

        function submitAssets() {
            var headerJs = $('#header-js > li.list-group-item').map(function() {
                return {
                    path: $(this).attr('data-link')
                };
            }).get();
            var frontHeaderJs = $('#menus-list > li.list-group-item').map(function() {
                return {
                    path: $(this).attr('data-link')
                };
            }).get();
            var footerJs = $('#footer-js > li.list-group-item').map(function() {
                return {
                    path: $(this).attr('data-link')
                };
            }).get();
            var ignoreUnitsJs = $('#ignored-units-js > li.list-group-item').map(function() {
                return {
                    path: $(this).attr('data-link')
                };
            }).get();
            var json = JSON.stringify({ headerJs, frontHeaderJs, footerJs, ignoreUnitsJs });

            clearTimeout(submitJSON);

            submitJSON = setTimeout(function (){
                alert(json);
            }, 3000);
        }
    </script>
@stop