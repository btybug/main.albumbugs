{{--Form 13 --}}
<h2 class="form-title">Create Post</h2>
<div class="field-box">
<fieldset id="bty-input-id-10">
    {!! Form::textarea(get_field_attr(10,'column_name'),null,['class' => 'bty-textarea-1','placeholder' => get_field_attr(10,'placeholder')]) !!}
</fieldset>
<fieldset id="bty-input-id-11">
    <div>
        {!! Form::text(get_field_attr(11,'column_name'),null,['class' => 'bty-input-label-5','placeholder' => get_field_attr(11,'placeholder')]) !!}
        <label>{!! get_field_attr(11,'label') !!}</label>
    </div>
</fieldset>

<fieldset id="bty-input-id-12">
    <div class="bty-input-select-1">
        {!! Form::select(get_field_attr(12,'column_name'),get_field_data(12),null,['placeholder' => get_field_attr(12,'placeholder'),'class' => 'form-control input-md']) !!}
    </div>
</fieldset>
</div>
<button type="submit" class="bty-btn bty-btn-save"><span>Save</span></button>

