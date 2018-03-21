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
                {!! Form::select('table',
                ['single' => 'specific Single row / rows','' => 'Filtered single row / rows'],null,['class' => 'form-control']) !!}
            </div>
            {{--<div class="form-group">--}}
                {{--<label>--}}
                    {{--Select Columns--}}
                {{--</label>--}}
                {{--{!! Form::select('column',BBGetTableColumn('users'),null,['class' => 'form-control']) !!}--}}
            </div>
        </div>
    </div>
@stop
@section('CSS')
    {!! Html::style("public/css/form-builder/form-builder.css?m=m") !!}
    {!! HTML::style("public/css/bty.css") !!}
    <style>

    </style>
@stop
@section('JS')
@stop

