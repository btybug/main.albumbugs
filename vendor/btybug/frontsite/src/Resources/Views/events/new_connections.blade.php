@extends( 'btybug::layouts.admin' )
@section( 'content' )
    <div class="container-fluid">
        <div class="row row-eq-height ">
            <div class="col-md-3">
                <div class="panel panel-default p-0 boxpanelminheight" data-panelevent="functions">
                    <div class="panel-heading">Functions</div>
                    <div class="panel-body">
                        <ul class="list-group listwithlink menuwithbutton">
                            @foreach($subscriber->getProperties() as $name=>$namespace)
                                <li class="list-group-item" data-value="{!! $namespace !!}"
                                    data-btnclick="selectfunction"><span
                                            class="badge">0</span> {!! $name !!}
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
            <div class="col-md-3">



            </div>
            <div class="col-md-3">

            </div>



        </div>

        {{--<div class="row">--}}
            {{--<textarea data-json="exportjson" class="form-control"></textarea>--}}
        {{--</div>--}}
    </div>


@stop

@section('CSS')
    {!! HTML::style('public/js/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! HTML::style('public/css/themes-settings.css') !!}

@stop
@section('JS')
    {!! HTML::script('public/js/bootstrap-select/js/bootstrap-select.min.js') !!}
@stop