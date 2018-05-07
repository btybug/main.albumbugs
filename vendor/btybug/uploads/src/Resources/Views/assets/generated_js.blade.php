@extends('btybug::layouts.mTabs',['index'=>'upload_assets'])
@section('tab')
    <div class="col-md-12">
        <a href="javascript:void(0);" class="btn btn-primary pull-right">Save</a>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Header JS
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
                        <ul data-nav-drag="" id="menus-list" class="sortable ui-sortable ui-droppable dvmin-height">
                            @if(count($assets))
                                @foreach($assets as $item)
                                    <li class="list-group-item" data-id="{{$item->path}}"
                                        data-name="{{ get_filename_from_path($item->path,DS) }}" data-link="{{ $item->path }}"
                                        data-type="{{$item->type}}">

                                        {{ get_filename_from_path($item->path,DS) }} (unit: {{ $item->page->slug }})

                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions[{{$item->id}}]" id="inlineRadio1" checked value="option1"> Keep Inside
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions[{{$item->id}}]" id="inlineRadio2" value="option2"> Update
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions[{{$item->id}}]" id="inlineRadio3" value="option3"> Ignore
                                        </label>
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