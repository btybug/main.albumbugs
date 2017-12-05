@extends('btybug::layouts.mTabs',['index'=>'page_edit'])
@section('tab')
    @if($page->form_path)
        @include($page->form_path)
    @else
        @include('manage::frontend.pages._partials.page-data')
    @endif
@stop