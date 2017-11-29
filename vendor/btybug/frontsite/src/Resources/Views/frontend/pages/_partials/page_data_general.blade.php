@if($page)
    {!! Form::model($page,['url' => url("/admin/manage/frontend/pages/settings", [$id]), 'id' => 'page_settings_form']) !!}

    <div class="row">
        <div class="col-xs-12 col-sm-9 connected" data-bbsortable="target">
            <div class="panel panel-default custompanel m-t-20">
                <div class="panel-heading"> Page Info</div>
                <div class="panel-body published_1">
                    {!! Form::hidden('id') !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12  left_sd verticalcontainer">
                            {{--<div class="vertical-text">--}}
                            {{--<span><i class="fa fa-check-circle icon_pbl"--}}
                            {{--aria-hidden="true"></i>Published</span>--}}
                            {{--</div>--}}
                            <div class="row left_part_publ">
                                <div>
                                    <div class="row rows">
                                        <div class="col-md-12 ">

                                            <div class="col-md-2">
                                                <i class="fa fa-universal-access" aria-hidden="true"></i><span
                                                        class="labls">Page access</span>
                                                <div class="radio">
                                                    <label for="radios-0">
                                                        {!! Form::radio('page_access',0,true,['class' => 'access-radio']) !!}
                                                        Public
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radios-1">
                                                        {!! Form::radio('page_access',1,null,['class' => 'access-radio']) !!}
                                                        Roles
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radios-1">
                                                        {!! Form::radio('page_access',2,null,['class' => 'access-radio']) !!}
                                                        Loged in
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-10 roles-box {!! ($page->page_access == 1) ? "show" : "hide" !!}">
                                                <div class="panel-body general-menu-settings">
                                                    <div class="bb-menu-form">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="text-primary">How Page display for different visitors
                                                                    types?</label>

                                                                <p>
                                                                    <a href="javascript:" class="btn btn-xs btn-danger bb-bulk-roles"
                                                                       data-bulk="hide">Hide for all</a>
                                                                    <a href="javascript:" class="btn btn-xs btn-success bb-bulk-roles"
                                                                       data-bulk="show">Show for all</a>
                                                                    <a href="javascript:" class="btn btn-xs btn-primary bb-bulk-roles"
                                                                       data-bulk="members">Show for members</a>
                                                                </p>

                                                                <div class="form-group has-feedback">
                                                                    <label>Filter roles</label>
                                                                    <input type="text" class="form-control" id="bb-role-filter"
                                                                           placeholder="Type search keyword">
                                                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                                                </div>

                                                                <ul class="list-group bb-roles-list">
                                                                    <li class="list-group-item" data-role="guests" data-title="Guests"
                                                                        data-display="show">
                                                                        <span class="bb-role-title">Guests</span>

                                                                        <a href="javascript:" class="pull-right text-info bb-what-to-show">
                                                                            <i class="fa fa-chevron-right"></i>
                                                                        </a>

                                                                        <div class="pull-right">
                                                                            <input type="checkbox" class="bb-switch bb-role-toggle" checked
                                                                                   name="guests">
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item" data-role="normal-user" data-title="Normal User"
                                                                        data-display="show">
                                                                        <span class="bb-role-title">Normal User</span>

                                                                        <a href="javascript:" class="pull-right text-info bb-what-to-show">
                                                                            <i class="fa fa-chevron-right"></i>
                                                                        </a>

                                                                        <div class="pull-right">
                                                                            <input type="checkbox" class="bb-switch bb-role-toggle" checked
                                                                                   name="normal-user">
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item" data-role="pro-user" data-title="Pro User"
                                                                        data-display="show">
                                                                        <span class="bb-role-title">Pro User</span>

                                                                        <a href="javascript:" class="pull-right text-info bb-what-to-show">
                                                                            <i class="fa fa-chevron-right"></i>
                                                                        </a>

                                                                        <div class="pull-right">
                                                                            <input type="checkbox" class="bb-switch bb-role-toggle" checked
                                                                                   name="pro-user">
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item" data-role="editor" data-title="Editor"
                                                                        data-display="show">
                                                                        <span class="bb-role-title">Editor</span>

                                                                        <a href="javascript:" class="pull-right text-info bb-what-to-show">
                                                                            <i class="fa fa-chevron-right"></i>
                                                                        </a>

                                                                        <div class="pull-right">
                                                                            <input type="checkbox" class="bb-switch bb-role-toggle" checked
                                                                                   name="editor">
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item" data-role="contributor" data-title="Contributor"
                                                                        data-display="show">
                                                                        <span class="bb-role-title">Contributor</span>

                                                                        <a href="javascript:" class="pull-right text-info bb-what-to-show">
                                                                            <i class="fa fa-chevron-right"></i>
                                                                        </a>

                                                                        <div class="pull-right">
                                                                            <input type="checkbox" class="bb-switch bb-role-toggle" checked
                                                                                   name="contributor">
                                                                        </div>
                                                                    </li>
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
                                                                        <button class="btn btn-primary form-control">BB Button for units
                                                                        </button>
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
                                                                        <button class="btn btn-primary form-control">BB Button for units
                                                                        </button>
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
                                                                        <button class="btn btn-primary form-control">BB Button for units
                                                                        </button>
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
                                                                        <button class="btn btn-primary form-control">BB Button for units
                                                                        </button>
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
                                                                        <button class="btn btn-primary form-control">BB Button for units
                                                                        </button>
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
                                                {{--{!! Form::text('roles',$page->getRolesByPage($id,true),['data-allwotag' => $roles,'class'=>'form-control hide tagit-hidden-field','data-tagit'=>'tagit' ,'id' => 'tagits']) !!}--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default custompanel m-t-20">
                <div class="panel-heading"> Author Info</div>
                <div class="panel-body published_1">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 right_part_publ">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 author_name_div">
                                    <div class="name_btn_div">
                                        <span class="author_name labls">Author Name</span>
                                        {!! Form::select('user_id',$admins,null,['style' => 'margin: auto;']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 user_photo text-center">
                                    <img src="{!! BBGetUserAvatar($page->user_id) !!}" alt="avatar"
                                         class="thumb-md-blue">
                                    {{--<i class="fa fa-user" aria-hidden="true"></i>--}}
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 author_name_div m-t-10">
                                    <p style="text-align: left"><b>Created
                                            :</b> {!! BBgetTimeFormat($page->created_at) !!} {!! BBgetDateFormat($page->created_at) !!}
                                    </p>
                                    <p style="text-align: left">
                                        <b>Edited :</b>
                                        @if($page->edited_by)
                                            By {{ @$page->editor->username }} {!! BBgetTimeFormat($page->updated_at) !!} {!! BBgetDateFormat($page->updated_at) !!}
                                        @else
                                            Not Edited Yet
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 create connected" data-bbsortable="source">
            <div class="panel panel-default custompanel m-t-20">
                <div class="panel-heading">General</div>
                <div class="panel-body">
                    <a href="javascript:void(0)" class="btn btn-info btn-block full-page-view m-b-5">Full Preview</a>
                    {{ Form::submit('Save', array('class' => 'save_btn m-b-5 btn-block','style' => "width:100%;")) }}
                </div>
            </div>

            @if($page->type != 'classify' && $page->type != 'tags')
                <div class="panel panel-default custompanel m-t-20">
                    <div class="panel-heading"> Page Tags</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                {!! Form::text('tags','',['class' => 'form-control','id' =>'tags']) !!}
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-t-15">
                                <div>
                                    All Tags
                                </div>
                                <ul class="list-inline" id="temp">
                                    @if (count($tags) > 0)
                                        @foreach ($tags as $tag)
                                            <li style="margin-top:5px;">
                                                <div class="btn btn-default">
                                                    {{ $tag->name }}
                                                    <a data-key="{!! $tag->id.'.'.$page->id !!}"
                                                       data-type="{!! $tag->name !!} Tag"
                                                       class="delete-button"
                                                       data-href="{{ url('admin/manage/frontend/pages/detach') }}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default custompanel m-t-20">
                    <div class="panel-heading">Select Classify</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                Select Classify
                            </div>
                            <div class="col-md-9">
                                <select name="classify" class="form-control classify">
                                    <option value="0" data-type="false">Select Classify</option>
                                    @foreach($classifies as $classify)
                                        <option value="{!! $classify->id !!}"
                                                data-type="{!! $classify->type !!}">{!! $classify->title !!}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row classify-box" style="min-height: 300px;">
                            @if($classifierPageRelations->count())
                                @foreach($classifierPageRelations as $classify)
                                    @include('manage::frontend.pages._partials.classify-items', [
                                        'classify' => $classify->classifier()->first(),
                                        'termsList' => $classify->classifier()->first()->classifierItem()->pluck('title','id')->toArray(),
                                        'classifyRelation' => $classify
                                    ])
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    {!! Form::close() !!}

    <div class="modal fade" id="full-page-view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button class="btn close-live-edit" data-dismiss="modal" aria-label="Close">
                    <span class="fa fa-power-off"></span>
                </button>
                <div class="modal-body">
                    <div class="live-edit-menu">
                        <div class="btn-group">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Action
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Some live action</a></li>
                                <li><a href="#">Some live Settings</a></li>
                                <li><a href="#">Some live etc</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="iframe-area"></div>
                </div>
            </div>
        </div>
    </div>

    @include('resources::assests.magicModal')
@else
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 design_panel">
        <div class="published_1">
            NO Page
        </div>
    </div>
@endif

@section('CSS')
    {!! HTML::style('public/css/create_pages.css') !!}
    {!!HTML::style( '/css/tag-it/jquery.tagit.css' ) !!}
    {!! HTML::style('public/css/bootstrap/css/bootstrap-switch.min.css') !!}
    {!! HTML::style('public/css/font-awesome/css/fontawesome-iconpicker.min.css') !!}
    {!! HTML::style('public/css/menus.css?v='.rand(1111,9999)) !!}

    <style>
        #main-wrapper {
            min-height: 1000px;
            display: inline-block;
        }

        @media (min-width: 1787px) {
            .header_image, .block {
                height: 398px;
            }
        }

        .live-preview-btn {
            background: #499bc7;
            color: #fff;
            width: 96px;
            height: 38px;
            border-radius: 3px;
            padding: 8px;
            font-size: 17px;
            margin-right: 10px;
            box-shadow: 2px 1px 6px #888888;
            cursor: pointer;
        }
    </style>
@stop
@section('JS')
    {!! HTML::script("public/js/UiElements/bb_styles.js?v.5") !!}
    {!! HTML::script('public/js/page-setting.js') !!}
    {!! HTML::script("public/js/UiElements/bb_div.js?v.5") !!}
    {!! HTML::script('public/js/tinymice/tinymce.min.js') !!}
    {!! HTML::script('public/js/tag-it/tag-it.js') !!}
    {!! HTML::script('public/js/jquery.mjs.nestedSortable.js') !!}
    {!! HTML::script('public/css/bootstrap/js/bootstrap-switch.min.js') !!}
    {!! HTML::script('public/css/font-awesome/js/fontawesome-iconpicker.min.js') !!}
    {!! HTML::script('public/js/menus.js') !!}
    <script>

        $(document).ready(function () {
            $(".access-radio").click(function () {
                if ($(this).val() == 1) {
                    $(".roles-box").removeClass("hide").addClass("show");
                } else {
                    $(".roles-box").removeClass("show").addClass("hide");
                }
            });

//            var getExt = $('#tagits').data('allwotag').split(',')
//            $('[data-tagit="tagit"]').tagit({
//                availableTags: getExt,
//                // This will make Tag-it submit a single form value, as a comma-delimited field.
//                autocomplete: {delay: 0, minLength: 0},
//                singleField: true,
//                singleFieldNode: $('.tagitext'),
//                beforeTagAdded: function (event, ui) {
//                    if (!ui.duringInitialization) {
//                        var exis = getExt.indexOf(ui.tagLabel);
//                        if (exis < 0) {
//                            $('.tagit-new input').val('');
//                            //alert('PLease add allow at tag')
//                            return false;
//                        }
//                    }
//
//                }
//            })


            tinymce.init({
                selector: '#main_content', // change this value according to your HTML
                height: 200,
                theme: 'modern',
                plugins: [
                    'advlist anchor autolink autoresize autosave bbcode charmap code codesample colorpicker contextmenu directionality emoticons fullpage fullscreen hr image imagetools importcss insertdatetime legacyoutput link lists media nonbreaking noneditable pagebreak paste preview print save searchreplace spellchecker tabfocus table template textcolor textpattern visualblocks visualchars wordcount shortcodes',
                ],
                toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help shortcodes',
                image_advtab: true
            });

            $('body').on('click', '.live-preview-btn', function () {
                if (!$(this).next().hasClass('redirect-type')) {
                    var typeInput = $('<input/>', {
                        type: 'hidden',
                        name: 'redirect_type',
                        value: 'view',
                        class: 'redirect-type'
                    });
                    $(this).after(typeInput);
                    $('#page_settings_form').submit();
                }

            });
        });

    </script>
@stop