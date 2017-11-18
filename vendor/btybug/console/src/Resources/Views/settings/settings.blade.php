@extends('btybug::layouts.admin')
@section('content')
    <div role="tabpanel" class="m-t-10" id="main">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main_container_11">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 panels_wrapper settings_panel">
                <div class="panel panel-default panels accordion_panels" id="my-accordion">
                    <div class="panel-heading bg-black-darker text-white" role="tab" id="headingLinkSettings">
                        <span class="panel_title">New Page Settings</span>
                        <a role="button" class="panelcollapsed collapsed" data-toggle="collapse"
                           data-parent="#accordion" href="#collapseLink3" aria-expanded="true"
                           aria-controls="collapseLink3">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        <ul class="list-inline panel-actions">
                            <li><a href="#" panel-fullscreen="true" role="button" title="Toggle fullscreen"><i
                                            class="glyphicon glyphicon-resize-full"></i></a></li>
                        </ul>
                    </div>
                    <div id="collapseLink3" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingLinkSettings">
                        <div class="panel-body panel_body panel_1 show">
                            <div>
                                {!! Form::model($settings,['class' => 'form-horizontal','files' => true]) !!}
                                <fieldset>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="for_button_1 col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                                    {!! BBbutton2('unit','header_unit','backend_header','Select Header',['class' => 'form-control input-md btn-info','data-type' => 'header','model' =>$settings]) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="for_button_1 col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                                    {!! BBbutton2('unit','footer_unit','backend_footer','Select Footer',['class' => 'form-control input-md btn-info','data-type' => 'header','model' =>$settings]) !!}
                                                </div>
                                                <div class="for_button_1 col-xs-6 col-sm-6 col-md-2 col-lg-3">
                                                    <input type="hidden" name="footer" value="0">
                                                    {!! Form::checkbox('footer', 1, $settings, ['id' => 'page_header_active', ]) !!}
                                                    <label for="page_header_active">Enabled</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label>Page Icon</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="input-group">
                                                        {!! Form::text('page_icon',null,['class' => 'form-control icp icp-auto','data-placement' => 'bottomRight']) !!}
                                                        <span style="height: 34px;width: 60px;"
                                                              class="pull-left input-group-addon"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {!!Btybug\btybug\Models\ContentLayouts\ContentLayouts::getBackendDefaultLayoutPlaceholders($settings) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        {{--<div class="col-md-12 for_save_btn">--}}
                                        {!! Form::submit('Save',['class' => 'btn btn-primary']) !!}
                                        {{--</div>--}}
                                    </div>
                                </fieldset>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 panels_wrapper settings_panel">
                <div class="panel panel-default panels accordion_panels" id="site_settings">
                    <div class="panel-heading bg-black-darker text-white" role="tab" id="headingLinkSettings">
                        <span class="panel_title">Site Settings</span>
                        <a role="button" class="panelcollapsed collapsed" data-toggle="collapse"
                           data-parent="#site_settings" href="#site_settings_ref" aria-expanded="true"
                           aria-controls="site_settings_ref">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        <ul class="list-inline panel-actions">
                            <li><a href="#" panel-fullscreen="true" role="button" title="Toggle fullscreen"><i
                                            class="glyphicon glyphicon-resize-full"></i></a></li>
                        </ul>
                    </div>
                    <div id="site_settings_ref" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingLinkSettings">
                        <div class="panel-body panel_body panel_1 show">
                            <div>
                                {!! Form::model($site_settings,['route' => 'site_settings_console','class' => 'form-horizontal','files' => true]) !!}
                                <fieldset>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="for_button_1 col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                                    {!! BBbutton2('unit','header_unit','backend_header','Select Header',['class' => 'form-control input-md btn-info','data-type' => 'header','model' =>$settings]) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="for_button_1 col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                                    {!! BBbutton2('unit','footer_unit','backend_footer','Select Footer',['class' => 'form-control input-md btn-info','data-type' => 'header','model' =>$settings]) !!}
                                                </div>
                                                <div class="for_button_1 col-xs-6 col-sm-6 col-md-2 col-lg-3">
                                                    <input type="hidden" name="footer" value="0">
                                                    {!! Form::checkbox('footer', 1, $site_settings, ['id' => 'page_header_active', ]) !!}
                                                    <label for="page_header_active">Enabled</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {!!Btybug\btybug\Models\ContentLayouts\ContentLayouts::getBackendDefaultLayoutPlaceholders($settings) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        {{--<div class="col-md-12 for_save_btn">--}}
                                        {!! Form::submit('Save',['class' => 'btn btn-primary']) !!}
                                        {{--</div>--}}
                                    </div>
                                </fieldset>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('resources::assests.magicModal')
@stop
@section('CSS')
    {!! HTML::style('public/css/menu.css?v=0.16') !!}
    {!! HTML::style('public/css/admin_pages.css') !!}
    {!! HTML::style('public/css/tool-css.css?v=0.23') !!}
    {!! HTML::style('public/css/page.css?v=0.15') !!}
    {!! HTML::style('public/css/bty.css?v=0.15') !!}
    {!! HTML::style('public/css/fontawesome-iconpicker.min.css') !!}

@stop


@section('JS')
    {!! HTML::script("public/js/UiElements/bb_styles.js?v.5") !!}
    {!! HTML::script('public/js/admin_pages.js') !!}
    {!! HTML::script('public/js/nestedSortable/jquery.mjs.nestedSortable.js') !!}
    {!! HTML::script('public/js/bootbox/js/bootbox.min.js') !!}
    {!! HTML::script('public/js/icon-plugin.js?v=0.4') !!}
    {!! HTML::script('public/js/tinymice/tinymce.min.js') !!}
    {!! HTML::script('public/js/page-setting.js?v=2') !!}
    {!! HTML::script('public/js/fontawesome-iconpicker.min.js') !!}
    <script>
        $(function () {
            $('.icp-auto').iconpicker();

            $('.icp').on('iconpickerSelected', function (e) {
                $(this).attr("value", e.iconpickerValue);
            });
        });
    </script>
@stop
