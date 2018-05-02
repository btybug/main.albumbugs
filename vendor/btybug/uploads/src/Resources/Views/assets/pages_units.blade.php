@extends('btybug::layouts.mTabs',['index'=>'upload_assets'])
@section('tab')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Pages / units </th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <th colspan="2">{!! $page->title !!}</th>
                @php
                    BBRenderFrontLayout($page,[]);
                    $units = \Config::get('units',[]);
                @endphp
            </tr>
            @if(count($units))
                @foreach($units as $unit)
                    <tr>
                        <td>
                            <p>Unit: {!! $unit['unit']->title !!}</p>
                            <p>Variation: {!!$unit['variation']->title !!}</p>
                        </td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            @endif
        @endforeach
        </tbody>
    </table>
@stop

@section('CSS')
@stop

@section('JS')
@stop