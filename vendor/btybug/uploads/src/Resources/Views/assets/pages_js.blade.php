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
        @foreach($pages as $page)
            @php
                $a = $home->render($page->url,[],true,$page);
                $actives= \Config::get('units_js',[]);
            @endphp

            <tr style="background-color: cadetblue;">
                <th colspan="2">{!! $page->title !!} page</th>
            </tr>
            @if(count($actives))
                @foreach($actives as $unit => $assets)
                    @if(count($assets))
                        @foreach($assets as $item)
                            <tr>
                                <td>
                                    <p><b>Unit :</b>  {{ $unit }} </p>
                                    <p><b>JS :</b> {!! get_filename_from_path($item,DS) !!}</p>
                                </td>
                                <td>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" selected="selected" value="option1"> Keep Inside
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Update
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Ignore
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4"> Keep Outside
                                    </label>
                                </td>
                            </tr>
                        @endforeach

                    @endif
                @endforeach
                @php
                    \Config::set('units_js',[]);
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