@extends('btybug::layouts.admin')
@section('content')
    {!! Form::model($menu,['id' => 'menu-save']) !!}
    {!! Form::hidden('id',null) !!}
    <div class="bb-menu-container">
        <div class="container-fluid">
            <!-- Settings -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading menu-panel">
                            <h3 class="panel-title pull-left">
                                <label>{!! $menu->name !!}</label>
                                {!! Form::text('name',null,['class' => 'menu-name-field']) !!}
                            </h3>

                            <div class="pull-right">
                                <a href="javascript:" class="btn btn-warning btn-sm bb-menu-settings">
                                    <i class="fa fa-cog"></i>
                                </a>
                                <a href="javascript:" class="btn btn-primary btn-sm bb-menu-save">Save</a>
                                <a href="javascript:" class="btn btn-success btn-sm">Preview</a>
                            </div>
                        </div>

                        <div class="panel-body general-menu-settings">
                            <div class="bb-menu-form">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label class="text-primary">How menu display for different visitors types?</label>

                                        <p>
                                            <a href="javascript:" class="btn btn-xs btn-danger bb-bulk-roles" data-bulk="hide">Hide for all</a>
                                            <a href="javascript:" class="btn btn-xs btn-success bb-bulk-roles" data-bulk="show">Show for all</a>
                                            <a href="javascript:" class="btn btn-xs btn-primary bb-bulk-roles" data-bulk="members">Show for members</a>
                                        </p>

                                        <div class="form-group has-feedback">
                                            <label>Filter roles</label>
                                            <input type="text" class="form-control" id="bb-role-filter" placeholder="Type search keyword">
                                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                        </div>

                                        <ul class="list-group bb-roles-list">
                                            @foreach($roles as $role)
                                                <li class="list-group-item" data-role="{{$role['slug']}}" data-title="{{$role['name']}}" data-display="show">
                                                    <span class="bb-role-title">{{$role['name']}}</span>

                                                    <a href="javascript:" class="pull-right text-info bb-what-to-show">
                                                        <i class="fa fa-chevron-right"></i>
                                                    </a>
                                                    <div class="pull-right">
                                                        <input type="checkbox" class="bb-switch bb-role-toggle" checked name="{{$role['slug']}}">
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="what-to-show-panel hide" data-for="guests">
                                            <div class="form-group">
                                                <label>What to show for "Guests" role?</label>
                                                <select name="guests_show" class="form-control input-sm">
                                                    <option value="hide">Hide Only</option>
                                                    <option value="unit">Render Unit</option>
                                                    <option value="menu">Render another menu</option>
                                                </select>
                                            </div>

                                            <div class="form-group hide" data-render="unit">
                                                <label>Select unit</label>
                                                <button class="btn btn-primary form-control">BB Button for units</button>
                                            </div>

                                            <div class="form-group hide" data-render="menu">
                                                <label>Select menu</label>
                                                <button class="btn btn-info form-control">BB Button for menus</button>
                                            </div>
                                        </div>
                                        <div class="what-to-show-panel hide" data-for="normal-user">
                                            <div class="form-group">
                                                <label>What to show for "Normal User" role?</label>
                                                <select name="normal-user_show" class="form-control input-sm">
                                                    <option value="hide">Hide Only</option>
                                                    <option value="unit">Render Unit</option>
                                                    <option value="menu">Render another menu</option>
                                                </select>
                                            </div>

                                            <div class="form-group hide" data-render="unit">
                                                <label>Select unit</label>
                                                <button class="btn btn-primary form-control">BB Button for units</button>
                                            </div>

                                            <div class="form-group hide" data-render="menu">
                                                <label>Select menu</label>
                                                <button class="btn btn-info form-control">BB Button for menus</button>
                                            </div>
                                        </div>
                                        <div class="what-to-show-panel hide" data-for="pro-user">
                                            <div class="form-group">
                                                <label>What to show for "Pro User" role?</label>
                                                <select name="pro-user_show" class="form-control input-sm">
                                                    <option value="hide">Hide Only</option>
                                                    <option value="unit">Render Unit</option>
                                                    <option value="menu">Render another menu</option>
                                                </select>
                                            </div>

                                            <div class="form-group hide" data-render="unit">
                                                <label>Select unit</label>
                                                <button class="btn btn-primary form-control">BB Button for units</button>
                                            </div>

                                            <div class="form-group hide" data-render="menu">
                                                <label>Select menu</label>
                                                <button class="btn btn-info form-control">BB Button for menus</button>
                                            </div>
                                        </div>
                                        <div class="what-to-show-panel hide" data-for="editor">
                                            <div class="form-group">
                                                <label>What to show for "Editor" role?</label>
                                                <select name="editor_show" class="form-control input-sm">
                                                    <option value="hide">Hide Only</option>
                                                    <option value="unit">Render Unit</option>
                                                    <option value="menu">Render another menu</option>
                                                </select>
                                            </div>

                                            <div class="form-group hide" data-render="unit">
                                                <label>Select unit</label>
                                                <button class="btn btn-primary form-control">BB Button for units</button>
                                            </div>

                                            <div class="form-group hide" data-render="menu">
                                                <label>Select menu</label>
                                                <button class="btn btn-info form-control">BB Button for menus</button>
                                            </div>
                                        </div>
                                        <div class="what-to-show-panel hide" data-for="contributor">
                                            <div class="form-group">
                                                <label>What to show for "Contributor" role?</label>
                                                <select name="contributor_show" class="form-control input-sm">
                                                    <option value="hide">Hide Only</option>
                                                    <option value="unit">Render Unit</option>
                                                    <option value="menu">Render another menu</option>
                                                </select>
                                            </div>

                                            <div class="form-group hide" data-render="unit">
                                                <label>Select unit</label>
                                                <button class="btn btn-primary form-control">BB Button for units</button>
                                            </div>

                                            <div class="form-group hide" data-render="menu">
                                                <label>Select menu</label>
                                                <button class="btn btn-info form-control">BB Button for menus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu -->
            <div class="row">
                <div class="col-md-4">
                    <ol class="bb-sortable-static bb-sortable-group">
                        {!! renderPagesInMenu($pageGrouped,true) !!}
                    </ol>

                    {!! Form::textarea('json_data',null,['id' => 'log','placeholder' => 'JSON LOG', 'class' => 'form-control','rows' => 15]) !!}
                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ol class="bb-menu-area"></ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop
{{--@include('tools::common_inc')--}}
@section('CSS')
    {!! HTML::style('public/css/bootstrap/css/bootstrap-switch.min.css') !!}
    {!! HTML::style('public/css/font-awesome/css/fontawesome-iconpicker.min.css') !!}
    {!! HTML::style('public/css/menus.css') !!}

@stop

@section('JS')
    {!! HTML::script('public/js/jquery.mjs.nestedSortable.js') !!}
    {!! HTML::script('public/css/bootstrap/js/bootstrap-switch.min.js') !!}
    {!! HTML::script('public/css/font-awesome/js/fontawesome-iconpicker.min.js') !!}
    {!! HTML::script('public/js/menus.js') !!}
@stop