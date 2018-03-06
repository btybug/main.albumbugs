@extends( 'btybug::layouts.admin' )
@section( 'content' )
    <div class="container-fluid">
       New
    </div>


@stop

@section('CSS')
    {!! HTML::style('public/js/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! HTML::style('public/css/themes-settings.css') !!}
    <style>
.nav-listing{
    background: #337ab7;
    border-radius: 12px;
    padding-bottom: 14px;
    margin: 3px;
}
    </style>

@stop
@section('JS')
    {!! HTML::script('public/js/bootstrap-select/js/bootstrap-select.min.js') !!}
    {!! HTML::script('public/js/events/event-new-setting.js') !!}
@stop