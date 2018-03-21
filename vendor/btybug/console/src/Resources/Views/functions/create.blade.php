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
                {!! Form::select('table',['' => 'Select'] + BBGetTables(),null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label>
                    Select Row
                </label>
                {!! Form::select('row',['' => 'Select'] +
                ['single' => 'specific Single row / rows','filtered' => 'Filtered single row / rows'],null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">

            </div>

            <div class="cust-group">
                <div class="form-group form-horizonta">
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
                        <button class="btn btn-sm btn-danger pull-right"><i class=" fa fa-minus"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <button class="btn btn-md btn-info pull-right"><i class=" fa fa-plus"></i></button>

            </div>
        </div>
    </div>
@stop
@section('CSS')
    {!! Html::style("public/css/form-builder/form-builder.css?m=m") !!}
    {!! HTML::style("public/css/bty.css") !!}
    <style>
        .cust-group > .form-group {
            box-shadow: 0 0 4px #ccc;
            padding: 20px 0;
        }
    </style>
@stop
@section('JS')
@stop

