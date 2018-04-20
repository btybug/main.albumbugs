@if($page)
    {!! Form::model($page,['id' => 'page_settings_form']) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-9 connected" data-bbsortable="target">
            <div class="panel panel-default custompanel m-t-20">
                <div class="panel-heading"> Page Info</div>
                <div class="panel-body published_1">
                    {!! Form::hidden('id') !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12  left_sd verticalcontainer">
                            <div class="row left_part_publ">
                                <div>
                                    <div class="row rows">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 row_inputs">
                                            <i class="fa fa-file-text" aria-hidden="true"></i><span
                                                    class="labls">Page Name</span>
                                            {!! Form::text('title',null,['class' => 'page_name']) !!}
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 row_inputs">
                                            <i class="fa fa-file-text" aria-hidden="true"></i><span
                                                    class="labls">Page URL</span>
                                            <div class="page_address page_labels">{!! $page->url !!}</div>
                                            {!! Form::hidden('url',null) !!}
                                        </div>
                                    </div>
                                    <div class="row rows">
                                        <div class="form-group">
                                            <label>Page Icon</label>

                                            <div class="input-group">
                                                {!! Form::text('page_icon',null,['class' => 'form-control icp icp-auto','data-placement' => 'bottomRight']) !!}
                                                <span style="height: 34px;width: 60px;" class="pull-left input-group-addon"></span>
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
                <div class="panel-heading">
                    Header & Footer
                </div>
                <div class="panel-body template_body">
                    <div class="form-group">
                        <div class="col-md-12">
                            {{Form::hidden('header',0)}}
                            {{Form::hidden('footer',0)}}
                            <label class="bd_layout pull-left m-r-15">{!! Form::checkbox('header',1,null,['style' => 'position:initial;z-index:1;']) !!}
                                <span class="labls">Header</span>

                            </label>
                            <label class="bd_layout"> {!! Form::checkbox('footer',1,null,['style' => 'position:initial;z-index:1;']) !!}
                                <span class="labls">Footer</span>

                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default custompanel m-t-20">
                <div class="panel-heading">
                    Layout
                </div>
                <div class="panel-body template_body">
                    <div class="form-group">
                        {!! BBcustomize('layouts','layout_id','frontend',
                                                       (isset($page->layout_id) && $page->layout_id)?'Change':'Select',
                                                       'admin_page_layout_'.$id,['class'=>'btn btn-default change-layout','model' =>$page]) !!}
                    </div>
                </div>
            </div>

            <div class="panel panel-default custompanel m-t-20">
                <div class="panel-heading">Main Content
                </div>
                <div class="panel-body template_body">
                    Main content
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 create connected" data-bbsortable="source">
            <div class="panel panel-default custompanel m-t-20">
                <div class="panel-heading">General</div>
                <div class="panel-body">
                    {{ Form::submit('Save', array('class' => 'save_btn m-b-5 btn-block','style' => "width:100%;")) }}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    @include('resources::assests.magicModal')
@else
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 design_panel">
        <div class="published_1">
            NO Page
        </div>
    </div>
@endif

@section('CSS')
    {!! HTML::style('public/css/fontawesome-iconpicker.min.css') !!}
    {!! HTML::style('public/css/create_pages.css') !!}

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
    {!! HTML::script('public/js/fontawesome-iconpicker.min.js') !!}

    <script>

        $(function (){
            $('.icp-auto').iconpicker();

            $('.icp').on('iconpickerSelected', function(e) {
                $(this).attr("value", e.iconpickerValue);
            });
        });
        $(document).ready(function () {
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

            $('body').on('change', '.content_type', function () {
                var value = $(this).val();

                if (value == 1) {
                    $('.iframe-page-content').removeClass('show').addClass('hide');
                    $('.editor-page-content').removeClass('hide').addClass('show');
                } else {
                    $('.editor-page-content').removeClass('show').addClass('hide');
                    $('.iframe-page-content').removeClass('hide').addClass('show');
                }

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