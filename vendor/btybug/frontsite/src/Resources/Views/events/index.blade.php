@extends( 'btybug::layouts.admin' )
@section( 'content' )
    <div class="container-fluid">
        <div class="row row-eq-height ">
            <div class="col-md-3">
                <div class="panel panel-default p-0 boxpanelminheight">
                    <div class="panel-heading">Available Events</div>
                    <div class="panel-body">
                        <div class="list-group">
                            @foreach($subscriber->getEvents() as $evSlug=>$event)
                                <button type="button" data-value="{!! $event['namespace'] !!}"
                                        class="list-group-item list-group-item-action"
                                        data-btnclick="selectevent">{!! $event['name'] !!}</button>
                            @endforeach
                        </div>


                    </div>
                </div>


            </div>
            <div class="col-md-3">
                <div class="panel panel-default p-0 boxpanelminheight" data-panelevent="functions">
                    <div class="panel-heading">Functions</div>
                    <div class="panel-body">
                        <ul class="list-group listwithlink menuwithbutton">
                            @foreach($subscriber->getProperties() as $slug=>$property)
                                <li class="list-group-item" data-value="{!! $property['namespace'] !!}"
                                    data-btnclick="selectfunction"><span
                                            class="badge">0</span> {!! $property['name'] !!}
                                    <div class="listtool">
                                        <button type="button" class="btn btn-default btn-xs" data-btnclick="addtab"
                                                data-cout='0'><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default p-0 boxpanelminheight hide" data-panelevent="connections">
                    <div class="panel-heading">Connections</div>
                    <div class="panel-body p-0">
                        <div class="row row-eq-height">
                            <div class="col-xs-1 event-leftbar p-t-10">
                                <ul class="nav nav-pills nav-stacked" role="tablist" data-role="eventtab">

                                </ul>

                            </div>
                            <div class="col-xs-11 p-15">
                                <div class="form-horizontal">
                                    <div class="tab-content" data-role="eventtabcont">


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>

        <div class="row">
            <textarea data-json="exportjson" class="form-control"></textarea>
        </div>
    </div>

@stop

@section('CSS')
    {!! HTML::style('public/js/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! HTML::style('public/css/themes-settings.css') !!}

@stop
@section('JS')
    {!! HTML::script('public/js/bootstrap-select/js/bootstrap-select.min.js') !!}
    {!! HTML::script('public/js/events/event-setting.js') !!}
@stop