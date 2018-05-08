@extends('btybug::layouts.admin')
@section('content')
    <div class="col-md-12">
        <div class="col-md-12">
            <a href="{!! url(route('uploads_assets_profiles_js')) !!}" class="btn btn-info pull-right">Back</a>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Header JS <a href="javascript:void(0);" class="btn btn-danger btn-sm pull-right add-assets">Add</a>
                    </h4>
                </div>
                <div class="panel-body">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                front-header.js
                            </h4>
                        </div>
                        <div class="panel-body">

                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-12 m-t-15">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Footer JS <a href="javascript:void(0);" class="btn btn-danger btn-sm pull-right add-assets">Add</a>
                    </h4>
                </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="uploadAssets" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Add assets</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::label('fi','Main Files') !!}
                        <div class="col-md-12">
                            @if(count($mains))
                                @foreach( $mains as $item)
                                    {{ $item->name }}
                                    @if($model && count($model->files))
                                        {!! Form::radio('main',$item->id,(in_array($item->id,$model->files)) ? true : null) !!}
                                    @else
                                        {!! Form::radio('main',$item->id,null) !!}
                                    @endif

                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('files','Files') !!}
                        <div class="col-md-12">
                            @if(count($plugins))
                                @foreach( $plugins as $plugin)
                                    {{ $plugin->name }} {!! Form::checkbox('files[]',$plugin->id,null) !!}
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                       <a href="javascript:void(0);" class="btn btn-primary pull-right">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('CSS')
@stop

@section('JS')
    <script>
        $(document).ready(function () {
            $("body").on('click','.add-assets',function () {
                $("#uploadAssets").modal();
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
            })
        });
    </script>
@stop