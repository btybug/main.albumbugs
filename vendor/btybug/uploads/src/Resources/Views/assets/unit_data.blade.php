@extends('btybug::layouts.mTabs',['index'=>'upload_assets'])
@section('tab')
    @inject('home','Btybug\btybug\Models\Home')
    <table class="table table-borderd m-t-20">
        <thead>
        <tr>
            <th>Unit</th>
            <th>Js Path</th>
            <th>Page</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Unit1</td>
            <td>
               path
            </td>
            <td>
                <p>Page 1</p>
                <p>Page 7</p>
                <p>Page 10</p>
            </td>
        </tr><tr>
            <td>Unit2</td>
            <td>
               path
            </td>
            <td>
                <p>Page 1</p>
                <p>Page 2</p>
                <p>Page 8</p>
                <p>Page 11</p>
            </td>
        </tr><tr>
            <td>Unit3</td>
            <td>
               path
            </td>
            <td>
                <p>Page 3</p>
                <p>Page 2</p>
            </td>
        </tr>

        {{--@foreach($pages as $page)--}}
            {{--@php--}}
                {{--$a=$home->render($page->url,[],true,$page);--}}
                   {{--$units = \Config::get('units',[]);--}}
            {{--@endphp--}}

            {{--@if(count($units))--}}
                {{--@foreach($units as $unit)--}}
                    {{--<tr>--}}
                        {{--<td>{!! $page->title !!}</td>--}}
                        {{--<td>--}}
                            {{--<p>Unit: {!! $unit['unit']->title !!}</p>--}}
                            {{--<p>Variation: {!!$unit['variation']->title !!}</p>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--@php--}}
                    {{--\Config::set('units',[]);--}}
                {{--@endphp--}}
            {{--@endif--}}

        {{--@endforeach--}}
        </tbody>
    </table>
@stop

@section('CSS')
@stop

@section('JS')
@stop