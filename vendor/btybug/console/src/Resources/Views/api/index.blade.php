@extends('btybug::layouts.admin')
@section('content')
    {{--<div class="text-right head-btn">--}}
        {{--<a href="{{route('api_create')}}" class="btn btn-sm btn-info">Create</a>--}}
    {{--</div>--}}
    {{--<table class="bty-table bty-table-hover">--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>url</th>--}}
            {{--<th>access</th>--}}
            {{--<th>actions</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--<tr>--}}
            {{--<td>Lorem 1</td>--}}
            {{--<td>Lorem 2</td>--}}
            {{--<td>--}}
                {{--<button class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></button>--}}
                {{--<button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>--}}
                {{--<button class="btn btn-xs btn-default"><i class="fa fa-ban"></i></button>--}}

            {{--</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>Lorem 7</td>--}}
            {{--<td>Lorem 8</td>--}}
            {{--<td>Lorem 9</td>--}}
        {{--</tr>--}}
        {{--</tbody>--}}
    {{--</table>--}}
<div id="app">
    <passport-clients></passport-clients>
    <passport-authorized-clients></passport-authorized-clients>
    <passport-personal-access-tokens></passport-personal-access-tokens>
</div>
@stop
@section('CSS')
    {{--<style>--}}
        {{--.head-btn{--}}
            {{--margin: 20px 0;--}}
        {{--}--}}
        {{--.bty-table > tbody > tr > td:first-child, .bty-table > thead > tr > th:first-child {--}}
            {{--text-align: left;--}}
        {{--}--}}
    {{--</style>--}}
@stop
@section('JS')
@stop
