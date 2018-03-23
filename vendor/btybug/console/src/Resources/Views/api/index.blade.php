@extends('btybug::layouts.admin')
@section('content')
    <div class="text-right head-btn">
        <button class="btn btn-sm btn-info">Create</button>
    </div>
    <table class="bty-table bty-table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>url</th>
            <th>access</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Lorem 1</td>
            <td>Lorem 2</td>
            <td>Lorem 3</td>
            <td>Lorem 4</td>
        </tr>
        <tr>
            <td>Lorem 7</td>
            <td>Lorem 8</td>
            <td>Lorem 9</td>
            <td>Lorem 10</td>
        </tr>
        </tbody>
    </table>
@stop
@section('CSS')
    <style>
        .head-btn{
            margin: 20px 0;
        }
    </style>
@stop
@section('JS')
@stop
