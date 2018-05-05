@extends('btybug::layouts.mTabs',['index'=>'upload_assets'])
@section('tab')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Header JS
                </h4>
            </div>
            <div class="panel-body">
                <ul data-nav-drag="" id="menus-list" class="sortable ui-sortable ui-droppable dvmin-height">
                    <li class="list-group-item" data-id="xxx"
                            data-name="xx" data-link="xx"
                            data-type="corepage">xxx</li>

                    <li class="list-group-item" data-id="xxx"
                            data-name="xx" data-link="xx"
                            data-type="corepage">xxx</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-12 m-t-15">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Footer JS
                </h4>
            </div>
            <div class="panel-body">

            </div>
        </div>
    </div>
@stop

@section('CSS')
    {!! HTML::style('public/js/jquery-ui/jquery-ui.css') !!}
@stop

@section('JS')
    {!! HTML::script('public/js/jquery-ui/jquery-ui.js') !!}
    {!! HTML::script('public/js/bootbox/js/bootbox.min.js') !!}
    {!! HTML::script('public/js/nestedSortable/jquery.mjs.nestedSortable.js') !!}
@stop