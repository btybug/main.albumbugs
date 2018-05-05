@extends('btybug::layouts.mTabs',['index'=>'upload_assets'])
@section('tab')
    @inject('home','Btybug\btybug\Models\Home')
    <table class="table table-borderd m-t-20">
        <thead>
        <tr>
            <th>Pages</th>
            <th>Unit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            @php
                $a=$home->render($page->url,[],true,$page);
                   $units = \Config::get('units',[]);
            @endphp

            @if(count($units))
                @foreach($units as $unit)
                    <tr>
                        <td>{!! $page->title !!}</td>
                        <td>
                            <p>Unit: {!! $unit['unit']->title !!}</p>
                            <p>Variation: {!!$unit['variation']->title !!}</p>
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