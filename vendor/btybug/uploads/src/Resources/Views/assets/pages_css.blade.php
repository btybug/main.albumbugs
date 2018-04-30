@extends('btybug::layouts.mTabs',['index'=>'upload_assets'])
@section('tab')

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Page CSS</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr><th colspan="2">Home</th></tr>
        <tr>
            <td>home.css</td>
            <td>
                <button class="btn btn-danger btn-sm">View</button>
            </td>
        </tr>
        <tr>
            <td>tagit.css</td>
            <td>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Keep Inside
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
        </tbody>
    </table>

@stop
@section('CSS')
@stop
@section('JS')
@stop