@extends('btybug::layouts.mTabs',['index'=>'upload_assets'])
@section('tab')
    @inject('home','Btybug\btybug\Models\Home')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>File name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr style="background-color: #a0746e;">
            <th colspan="2">Profile</th>
        </tr>
        @if(isset($profiles['css_version']) && count($profiles['css_version']))
            @foreach($profiles['css_version'] as $item)
                @php
                    $p = BBgetProfile($item,'css');
                @endphp
                <tr>
                    <td colspan="2">
                        {!! $p->name or 'wrong profile' !!}
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <th colspan="2">NO Default Profile</th>
            </tr>
        @endif
        @foreach($pages as $page)
            @php
                $a = $home->render($page->url,[],true,$page);
                $actives= \Config::get('units_css',[]);
            @endphp

            <tr style="background-color: cadetblue;">
                <th colspan="2">{!! $page->title !!} page</th>
            </tr>
            @if(count($actives))
                @foreach($actives as $unit => $assets)
                    @if(count($assets))
                        @foreach($assets as $key=> $item)
                            <tr>
                                <td>
                                    <p><b>Unit :</b>  {{ $unit }} </p>
                                    <p><b>Css :</b> {!! get_filename_from_path($item,DS) !!}</p>
                                </td>
                                <td>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions[{{$page->id}}][{{$unit}}][{{ $key }}]" id="inlineRadio1" checked value="option1"> Keep Inside
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions[{{$page->id}}][{{$unit}}][{{ $key }}]" id="inlineRadio2" value="option2"> Update
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions[{{$page->id}}][{{$unit}}][{{ $key }}]" id="inlineRadio3" value="option3"> Ignore
                                    </label>
                                </td>
                            </tr>
                        @endforeach

                    @endif
                @endforeach
                @php
                    \Config::set('units_css',[]);
                @endphp
            @else
                <tr>
                    <th colspan="2">NO assets</th>
                </tr>
            @endif

        @endforeach
        </tbody>
    </table>
@stop
@section('CSS')
@stop
@section('JS')
@stop