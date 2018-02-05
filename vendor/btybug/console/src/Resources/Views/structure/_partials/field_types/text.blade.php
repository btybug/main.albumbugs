<!-- Text input-->
<div class="form-group @if(!$field->visibility) hidden @endif">
    <label class="col-md-4 control-label" for="textinput">{!! $field->label !!}</label>
    <div class="col-md-4">
        <input id="textinput" name="{!! $field->column_name !!}" @if($field->required) required @endif type="text"
               placeholder="{!! $field->placeholder !!}" class="form-control input-md" value="{!! $field->default_value !!}">
        <span class="help-block">{!! $field->help !!}</span>
    </div>
</div>