@extends( 'btybug::layouts.admin' )

@section( 'CSS' )
    {!! HTML::style("public/libs/jspanel/jspanel.min.css") !!}
    {!! Html::style("public/css/form-builder/form-builder.css?m=m") !!}
    {!! Html::style("public/libs/easyui/easyui.css") !!}
    {!! HTML::style("public/libs/minicolors/jquery.minicolors.css") !!}
    {!! HTML::style("public/libs/toggle/jquery.toggleinput.css") !!}
@stop

@section( 'JS' )
    {!! HTML::script("public/libs/easyui/easyloader.js") !!}
    <script>
        easyloader.base = '<?php echo url("public/libs/easyui/") ?>/';
        easyloader.css = false;
    </script>
    {!! HTML::script("public/libs/jspanel/jspanel.min.js") !!}
    {!! HTML::script("public/libs/toggle/jquery.toggleinput.js") !!}
    {!! HTML::script("public/libs/minicolors/jquery.minicolors.min.js") !!}
    {!! Html::script("public/js/form-builder/css-studio.js") !!}
    {!! Html::script("public/js/form-builder/form-builder.js?m=m") !!}
    {!! Html::script("public/js/form-builder/form-logic.js?m=m") !!}
@stop

@section( 'content' )
    <!-- Form Builder -->
    {!! Form::model($form,['id'=>'fields-list','url' => url(route('save_core_forms',$form->id))]) !!}
    {!! Form::hidden('id',$form->id) !!}
    <div class="bb-form-header">
        <div class="row">
            <div class="col-md-5">
                <label>Form name</label>
                {!! Form::text('name',null,['class' => 'form-name', 'placeholder' => 'Form Name']) !!}
            </div>
            <div class="col-md-7">
                <button type="submit" class="form-save pull-right">Save</button>
                <button type="button" class="panel-trigger pull-right" bb-click="openFieldsWindow">Fields</button>
                <button type="button" class="panel-trigger pull-right" bb-click="openStudioWindow">Styling</button>
                <button type="button" class="panel-trigger pull-right" bb-click="openLogicModal" data-toggle="modal"
                        data-target="#logicModal">Logic
                </button>
                <button type="button" class="panel-trigger pull-right" data-toggle="modal"
                        data-target="#settingsModal">Settings
                </button>
            </div>
        </div>
    </div>
    {!! Form::textarea('fields_html',null,['class' => 'generated_html hide']) !!}
    {!! Form::textarea('original_html',null,['class' => 'original_html hide']) !!}
    {!! Form::textarea('fields_json',null,['class' => 'generated_json hide']) !!}
    {!! Form::close() !!}

    <h3>Preview Area</h3>

    <hr/>

    <div class="container-fluid">
        <style id="bbcc-form-style"></style>
        <div class="row form-builder-area bbcc-form"></div>
    </div>

    <div class="modal fade" id="logicModal" role="dialog">
        <div class="modal-dialog modal-logic">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="logic-box">
                        <div class="logic-tabs">
                            <div class="active">
                                <div class="logic-head">
                                    <div class="condition">
                                        Conditions
                                    </div>
                                    <div class="action">
                                        Actions
                                    </div>
                                </div>
                                <div class="logic-list"></div>
                                <div class="add-logic-cover">
                                    <button class="add-logic-button">Add New Logic</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="settingsModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Form Settings
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group m-l-0 m-r-0">
                            <label for="success_message" class="col-sm-4 ">Success Message</label>
                            <div class="col-sm-8">
                                {!! Form::text('message',(isset($settings['message'])) ? $settings['message'] : null ,['class' =>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group m-l-0 m-r-0">
                            <label for="success_message" class="col-sm-4 ">Redirect on Submit</label>
                            <div class="col-sm-8">
                                {!! Form::text('redirect_url',(isset($settings['redirect_url'])) ? $settings['redirect_url'] : null ,['class' =>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group m-l-0 m-r-0">
                            <label for="success_message" class="col-sm-4 ">Create Permission</label>
                            <div class="col-sm-8">
                                <label>allow guest
                                    {!! Form::checkbox('create_allow',0,null,['class' => 'allow_create_permission']) !!}
                                </label>
                                <label>allow Logged In
                                    {!! Form::checkbox('create_allow',1,null,['class' => 'allow_create_permission']) !!}
                                </label>
                                <label>allow Admins
                                    {!! Form::checkbox('create_allow',2,null,['class' => 'allow_create_permission allow_create_admins']) !!}
                                </label>
                            </div>
                        </div>
                        <div class="form-group m-l-0 m-r-0 hide create-roles-box">
                            <label for="success_message" class="col-sm-4 ">Select Roles</label>
                            <div class="col-sm-8">
                                {!! Form::select('create_allowed_roles',\Btybug\User\Services\RoleService::getList(),null,['class' => 'form-control select-roles']) !!}
                            </div>
                        </div>

                        <div class="form-group m-l-0 m-r-0">
                            <label for="success_message" class="col-sm-4 ">Edit Permission</label>
                            <div class="col-sm-8">
                                <label>allow guest
                                    {!! Form::checkbox('edit_allow',0,true,[]) !!}
                                </label>
                                <label>allow Logged In
                                    {!! Form::checkbox('edit_allow',1,null,[]) !!}
                                </label>
                                <label>allow Admins
                                    {!! Form::checkbox('edit_allow',2,null,['class' => 'allow_edit_permission']) !!}
                                </label>
                            </div>
                        </div>
                        <div class="form-group m-l-0 m-r-0 hide edit-roles-box">
                            <label for="success_message" class="col-sm-4 ">Select Roles</label>
                            <div class="col-sm-8">
                                {!! Form::select('edit_allowed_roles',\Btybug\User\Services\RoleService::getList(),null,['class' => 'form-control select-roles']) !!}
                            </div>
                        </div>

                        <div class="form-group m-l-0 m-r-0">
                            <label for="" class="col-sm-4">Is Ajax</label>
                            <div class="col-sm-8">
                                <div class="customelement radio-inline">
                                    <input name="is_ajax" id="is_ajax_yes"
                                           <?php echo (isset($settings['is_ajax']) && $settings['is_ajax'] == 'yes') ? 'checked' : '' ?> value="yes"
                                           type="radio">
                                    <label for="is_ajax_yes">Yes</label>
                                </div>
                                <div class="customelement radio-inline">
                                    <input name="is_ajax" id="is_ajax_no"
                                   <?php echo (isset($settings['is_ajax'])
                                       && $settings['is_ajax'] == 'no') ? 'checked' : (isset($settings['is_ajax']) && $settings['is_ajax'] == 'yes') ? '' : 'checked' ?>
                                   value="no" type="radio"> <label for="is_ajax_no">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="template" id="fields-html">
        <div class="form-elements-list">
            @if(count($fields))
                @foreach($fields as $field)
                    <div class="form-element-item draggable-element {!! (in_array($field->slug,$existingFields)) ? 'hide' : '' !!}"
                         data-id="{!! $field->id !!}"
                         data-shortcode="[field id={{$field->id}}]">
                        {{ $field->name }}
                        <div class="form-element-item-sample hidden">
                            <div class="col-md-12">
                                {!! field_render(['id' => $field->id]) !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </script>

    <!-- CSS Studio Templates -->
    <script type="template" id="bbt-editor-list">
        <h4>Select Item</h4>
        <ul class="bbs-editor-list">{groups}</ul>
    </script>

    <script type="template" id="bbt-properties-container">
        <li class="bbs-property-group">
            <h3 bbs-click="toggleOpen">
                {title}
                <i class="fa fa-chevron-right"></i>
            </h3>
            <div class="bbs-properties-list">{properties}</div>
        </li>
    </script>

    <script type="template" id="bbt-property-container">
        <div class="bbs-property-container">
            <label for="bbs-{id}">{label}</label>
            <div class="bbs-property-field">{field}</div>
        </div>
    </script>

    <script type="template" id="bbt-dropdown">
        <div class="bbs-dropdown-box">
            <select class="bbs-combobox" id="bbs-{id}" name="{name}">{options}</select>
        </div>
    </script>

    <script type="template" id="bbt-color">
        <div class="bbs-color-box">
            <input class="bbs-input bbs-color" id="bbs-{id}" name="{name}">
        </div>
    </script>

    <script type="template" id="bbt-number">
        <div class="bbs-number-spinner">
            <input class="bbs-input bbs-number" id="bbs-{id}" name="{name}">
        </div>
    </script>

    <script type="template" id="bbt-toggle">
        <div class="bbs-toggle">
            {options}
        </div>
    </script>

    <script type="template" id="condition-row">
        <div class="group-row">
            <div class="and-or">
                <select name="" id="" class="logic-touch">
                    <option value="">AND</option>
                    <option value="">OR</option>
                </select>
            </div>

            <div class="field">
                <select name="" id="" class="logic-touch">
                    <option value="">(field)</option>
                    <option value="">1</option>
                    <option value="">2</option>
                </select>
            </div>
            <div class="trigger">
                <select name="" id="" class="logic-touch">
                    <option value="">(trigger)</option>
                    <option value="equal_to">is equal to</option>
                    <option value="not_equal_to">is not equal to</option>
                    <option value="contains">contains</option>
                    <option value="contains_not">doest not contain</option>
                    <option value="greater_than">is greater than</option>
                    <option value="less_than">is less than</option>
                </select>
            </div>
            <div class="text">
                <input type="text" placeholder=" ..." class="logic-touch">
            </div>
            <div class="remove-action">
                x
            </div>
        </div>
    </script>



    <script type="template" id="fields-selectBox">
        <select name="" id="" class="logic-touch">
            <option value="">(fields)</option>
            <option value="">1</option>
            <option value="">2</option>
        </select>
    </script>

    <script type="template" id="input-box">
        <input type="text" class="logic-touch" placeholder="..."/>
    </script>

    <script type="template" id="then-row">
        <div class="group-row">
            <div class="sign-and">&</div>
            <div class="set-value">
                <select name="" id="" class="logic-touch than-action">
                    <option value="">(action)</option>
                    <option value="show_fields">show fields</option>
                    <option value="hide_fields">hide fields</option>
                    <option value="email_to">send email to</option>
                    <option value="redirect_to">redirect to</option>
                    <option value="trigger_integration">trigger integration</option>
                    <option value="set_value">set value of</option>
                </select>
            </div>
            <div class="result">

            </div>
            <div class="remove-action act-rem">x</div>
        </div>
    </script>

    <script type="template" id="logic-html">
        <div class="logic-area">
            <div class="logic-text if">
                if
            </div>
            <div class="group-cond">
                <div class="group-row">
                    <div class="field">
                        <select name="" id="" class="logic-touch">
                            <option value="">(field)</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                    <div class="trigger">
                        <select name="" id="" class="logic-touch">
                            <option value="">(trigger)</option>
                            <option value="equal_to">is equal to</option>
                            <option value="not_equal_to">is not equal to</option>
                            <option value="contains">contains</option>
                            <option value="contains_not">doest not contain</option>
                            <option value="greater_than">is greater than</option>
                            <option value="less_than">is less than</option>
                        </select>
                    </div>
                    <div class="text">
                        <input type="text" placeholder=" ..." class="logic-touch">
                    </div>
                    <div class="remove-action">
                        x
                    </div>
                </div>
                <div class="add-group add-cond-row">add condition row</div>
            </div>
            <div class="logic-text than">
                then
            </div>
            <div class="group-action">
                <div class="group-row">
                    <div class="set-value">
                        <select name="" id="" class="logic-touch than-action">
                            <option value="">(action)</option>
                            <option value="show_fields">show fields</option>
                            <option value="hide_fields">hide fields</option>
                            <option value="email_to">send email to</option>
                            <option value="redirect_to">redirect to</option>
                            <option value="trigger_integration">trigger integration</option>
                            <option value="set_value">set value of</option>
                        </select>
                    </div>
                    <div class="result">

                    </div>
                    <div class="remove-action act-rem">x</div>
                </div>

                <div class="add-group add-action-row">add action row</div>
            </div>

            <div class="logic-remove">×</div>
        </div>
    </script>
@stop

@section( 'Footer' )
    <div class="bb-node-action-size"></div>
    <div class="bb-node-action-menu">
        <i class="fa fa-arrows-h bb-node-move" bb-click="toggleResize"></i>
        <i class="fa fa-trash bb-node-delete" bb-click="deleteActiveField"></i>
        <i class="fa fa-paint-brush bb-node-edit" bb-click="openStudioWindow"></i>
    </div>
@stop

@section( 'JS' )

    <script>
        $(function () {

//get partial options view
            $('body').on('change', '.partials-change', function () {

                var data = {
                    'type': $(this).val(),
                    'data_id': $(this).attr('data-id'),
                    'options_form_id': $('input[name=id]').val()
                };
                $.ajax({
                    type: 'POST',
                    url: "",
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                    dataType: 'json',
                    success: function (data) {
                        if (!data.error) {
                            var data_id = data.data_id;
                            $('body').find('div[data-id=' + data_id + ']').find('.partials-area').html(data.html);
                        } else {
                            alert(data.message);
                        }
                    }
                });
            });

            var jsonString = $('#tabs-json-area').text();
            var jsonData = JSON.parse(jsonString);
            var tabJson = {name: null, data: {}}
            $('#save-tab-changes').on('click', function () {
                var newTab = (objectifyForm($('#tab-options')));
                var copyData = tabJson;
                copyData.name = newTab.name;
                copyData.data = [{'type': 'unit', 'value': 'price_calculate.default'}];
                jsonData.push(copyData);
                updateTabs(jsonData);
                $('#tab-manage-modal').modal('hide');
                $('#tabs-json-area').text(JSON.stringify(jsonData));


            });

//data-id

            function objectifyForm(formArray) {//serialize data function
                var data = {};
                formArray.serializeArray().map(function (x) {
                    data[x.name] = x.value;
                });
                data.data = {};
                return data;
            }
        });

    </script>



    <script>

        $("body").on('input', '.form-title-settings', function () {
            var val = $(this).val();

            $(".form-title").text(val);
        });

        $("body").on('change', '.select-field', function () {
            var checkbox = this;
            var field = $(checkbox).val();
            if (checkbox.checked) {
                var table = $(checkbox).data('table');
                $.ajax({
                    url: "mbsp_render_fields",
                    data: {table: table, field: field},
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                    dataType: 'json',
                    success: function (data) {
                        if (!data.error) {
                            $(".field-box").append(data.html);
                        }
                    },
                    type: 'POST'
                });
                // alert($(checkbox).val());
            } else {

                $("#bty-input-id-" + $(checkbox).data('id')).remove();
            }
        });


        $('button[data-action=save-form]').on('click', function () {
            var data = $('#fields-list').serialize();
            $.ajax({
                url: "mbsp_save_form",
                data: data,
                headers: {
                    'X-CSRF-TOKEN': $("input[name='_token']").val()
                },
                dataType: 'json',
                success: function (data) {
                    if (!data.error) {
                        window.location.href = "blog_form_list";
                    }
                },
                type: 'POST'
            });
        });
    </script>

@stop