@extends('btybug::layouts.mTabs',['index'=>'upload_assets'])
@section('tab')
    @inject('home','Btybug\btybug\Models\Home')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Pages / units</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            @php
                $a=$home->render($page->url,[],true,$page);
                   $units = \Config::get('units',[]);
            @endphp

            <tr>
                <th colspan="2">{!! $page->title !!}</th>
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
                @php
                    \Config::set('units',[]);
                @endphp
            @endif

        @endforeach
        </tbody>
    </table>
@stop

@section('CSS')
@stop

@section('JS')
@stop