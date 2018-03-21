@extends('btybug::layouts.admin')
@section('content')
    <div class="bb-form-header">
        <div class="row">
            <div class="col-md-4">
                <label>Function name</label>
                {!! Form::text('name',null,['class' => 'form-name', 'placeholder' => 'Fn Name']) !!}
            </div>
            <div class="col-md-8">
                <button type="submit" class="form-save pull-right" bb-click="saveHTML">Save</button>
            </div>
        </div>
    </div>

    <div class="row m-b-10">
        <h3>Create Function</h3>

        <div class="col-md-12">
            <div class="form-group">
                <label>
                    Select Table
                </label>
                {!! Form::select('table',['' => 'Select'] + BBGetTables(),null,['class' => 'form-control custom_table']) !!}
            </div>
            <div class="form-group">
                <label>
                    Select Row
                </label>
                {!! Form::select('row',['' => 'Select'] +
                ['single' => 'specific Single row / rows','filtered' => 'Filtered single row / rows'],null,['class' => 'form-control custom_row']) !!}
            </div>
            <div class="custom_hidden is_hidden">
                <div class="cust-group append_here">
                   
                </div>
                <button class="btn btn-md btn-info pull-right add_new_field"><i class=" fa fa-plus"></i></button>
            </div>
        </div>
    </div>
@stop
<script type="template" id="get_new_field">
    <div class="form-group form-horizontal">
        <div class="col-md-5">
            <label class="col-md-4 control-label">Select column</label>
            <div class="col-md-8">
                <select name="" id="" class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <label class="col-md-2 control-label">Value</label>
            <div class="col-md-5">
                <select name="" id="" class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                </select>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-2">
            <select name="" id="" class="form-control">
                <option value="">and</option>
                <option value="">or</option>
            </select>
        </div>
        <div class="col-md-1">
            <button class="btn btn-sm btn-danger pull-right remove_this_field"><i class=" fa fa-minus"></i></button>
        </div>
        <div class="clearfix"></div>
    </div>
</script>
@section('CSS')
    {!! Html::style("public/css/form-builder/form-builder.css?m=m") !!}
    {!! HTML::style("public/css/bty.css") !!}
    <style>
        .cust-group > .form-group {
            box-shadow: 0 0 4px #ccc;
            padding: 20px 0;
        }
        .custom_hidden{
            display:none;
        }
    </style>
@stop
@section('JS')
    <script>
        window.onload = function(){
            $("body").delegate(".custom_row","click",function(){
                var table_name = $(".custom_table").val();
                if(table_name !== ''){
                    $(".is_hidden").removeClass("custom_hidden");
                }else{
                    $(".is_hidden").addClass("custom_hidden");
                }
            });
            $("body").delegate(".add_new_field","click",function(){
                var html = $("#get_new_field").html();
                return $(".append_here").append(html);
            });
            $("body").delegate(".remove_this_field","click",function(){
                return $(this).parent().parent().remove();
            });
        }
    </script>
@stop

