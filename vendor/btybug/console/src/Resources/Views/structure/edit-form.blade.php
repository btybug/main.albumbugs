@extends( 'btybug::layouts.admin' )

@section( 'CSS' )
    {!! HTML::style("public/libs/jspanel/jspanel.min.css") !!}
    {!! Html::style("public/css/form-builder/form-builder.css") !!}
    {!! Html::style("public/libs/easyui/easyui.css") !!}
    {!! HTML::style("public/libs/minicolors/jquery.minicolors.css") !!}
    {!! HTML::style("public/libs/toggle/jquery.toggleinput.css") !!}
@stop

@section( 'JS' )
    {!! HTML::script("public/libs/easyui/jquery.easyui.min.js") !!}
    {!! HTML::script("public/libs/jspanel/jspanel.min.js") !!}
    {!! HTML::script("public/libs/toggle/jquery.toggleinput.js") !!}
    {!! HTML::script("public/libs/minicolors/jquery.minicolors.min.js") !!}
    {!! Html::script("public/js/form-builder/css-studio.js") !!}
    {!! Html::script("public/js/form-builder/form-builder.js") !!}
@stop

@section( 'content' )
    <!-- Form Builder -->
    {!! Form::model($form,['id'=>'fields-list','url' => url(route('save_core_forms',$form->id))]) !!}
    {!! Form::hidden('id',$form->id) !!}
    <div class="bb-form-header">
        <div class="row">
            <div class="col-md-7">
                <label>Form name</label>
                {!! Form::text('name',null,['class' => 'form-name', 'placeholder' => 'Form Name']) !!}
            </div>
            <div class="col-md-5">
                <button type="submit" class="form-save pull-right">Save</button>
                <button type="button" class="panel-trigger pull-right" bb-click="openFieldsWindow">Fields</button>
                <button type="button" class="panel-trigger pull-right" bb-click="openStudioWindow">Styling</button>
            </div>
        </div>
    </div>
    {!! Form::textarea('fields_html',null,['class' => 'generated_html hide']) !!}
    {!! Form::textarea('original_html',null,['class' => 'original_html hide']) !!}
    {!! Form::textarea('fields_json',null,['class' => 'generated_json hide']) !!}
    {!! Form::close() !!}

    <h3>Preview Area</h3>

    <hr/>

    <div class="row ">
        <div class="col-md-12">
            <div class="form-builder-area"></div>

            <!-- Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>

    <script type="template" id="fields-html">
        <div class="form-elements-list">
            @if(count($fields))
                @foreach($fields as $field)
                    <div class="form-element-item draggable-element {!! (in_array($field->slug,$existingFields)) ? 'hide' : '' !!}"  data-id="{!! $field->id !!}"
                         data-shortcode="[field id={{$field->id}}]">
                        {{ $field->name }}
                        <div class="form-element-item-sample hidden">
                            <div class="form-group">
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
            <select class="bbs-combobox" id="bbs-{id}">{options}</select>
        </div>
    </script>

    <script type="template" id="bbt-color">
        <div class="bbs-color-box">
            <input class="bbs-input bbs-color" id="bbs-{id}">
        </div>
    </script>

    <script type="template" id="bbt-number">
        <div class="bbs-number-spinner">
            <input class="bbs-input bbs-number" id="bbs-{id}">
        </div>
    </script>

    <script type="template" id="bbt-toggle">
        <div class="bbs-toggle">
            <div class="form-check radio-toggle">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    Right
                </label>
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    Center
                </label>
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    Left
                </label>
            </div>
        </div>
    </script>
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