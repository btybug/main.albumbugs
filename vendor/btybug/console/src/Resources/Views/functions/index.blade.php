@extends('btybug::layouts.admin')
@section('content')
    <div class="row m-b-10">
        <h3>All Functions</h3>
        <div class="col-md-12">
            <a class="btn btn-primary pull-right" href="{!! url('admin/console/functions/create') !!}"><i class="fa fa-plus"></i> Create</a>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr class="bg-black text-white">
                    <th>Name</th>
                    <th>Function</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="field_list">
                {{--@if(count($entries))--}}
                {{--@foreach($entries as $count => $entry)--}}
                {{--<tr class="field-row">--}}
                {{--<td>{!! $entry->id !!}</td>--}}
                {{--<td>{!! BBgetDateFormat($entry->created_at) !!}</td>--}}
                {{--<td>{!! BBgetTimeFormat($entry->created_at) !!}</td>--}}
                {{--<td>{!! $entry->ip !!}</td>--}}
                {{--<td>{!! ($entry->user) ? $entry->user->username or $entry->user->email : 'Guest' !!}</td>--}}
                {{--<td>--}}
                {{--<a href="javascript:void(0)" data-id="{!! $entry->id !!}"--}}
                {{--class="btn btn-success show-entry-data"><i class="fa fa-eye"></i></a>--}}
                {{--</td>--}}
                {{--</tr>--}}
                {{--@endforeach--}}
                {{--@else--}}
                <tr>
                    <td colspan="4">
                        No functions
                    </td>
                </tr>
                {{--@endif--}}
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('CSS')

@stop
@section('JS')
@stop