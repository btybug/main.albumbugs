{!! BBstyle($_this->path.DS.'css/main.css') !!}

<div class="login-form {!! get_settings($settings, "main_background") !!}">

    <div class="header">
        <h1 data-item="main_title">{!! get_settings($settings, "main_title", "Create Post") !!}</h1>
        <span data-item="sub_title">{!! get_settings($settings, "sub_title", "Fill out the form below to create new post") !!}</span>
    </div>

    <div class="content {!! get_settings($settings, "field_style", "default") !!}">
        <div class="row">
            <div class="col-md-6">
                <div class="bb-form-area connectedSortable"></div>
            </div>
            <div class="col-md-6">
                <div class="bb-form-area connectedSortable"></div>
            </div>
            <div class="col-md-12" style="margin-top: 20px;">
                <div class="bb-form-area connectedSortable"></div>
            </div>
        </div>
    </div>

    <div class="footer">
        <input type="submit" name="submit" data-item="button_text" value="{!! get_settings($settings, "button_text", "Save") !!}" class="button {!! get_settings($settings, "button_background") !!} {!! get_settings($settings, "button_style") !!}" />
    </div>

</div>