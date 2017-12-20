{{--Form 13 --}}
<h2 class="form-title">Create Post</h2>
<div class="field-box">
<fieldset id="bty-input-id-10">
    {!! Form::textarea(get_field_attr(10,'table_name')."_".get_field_attr(10,'column_name'),null,['class' => 'bty-textarea-1','placeholder' => get_field_attr(10,'placeholder')]) !!}
</fieldset>
<fieldset id="bty-input-id-11">
    <div>
        {!! Form::text(get_field_attr(11,'table_name')."_".get_field_attr(11,'column_name'),null,['class' => 'bty-input-label-5','placeholder' => get_field_attr(11,'placeholder')]) !!}
        <label>{!! get_field_attr(11,'label') !!}</label>
    </div>
</fieldset>

<fieldset id="bty-input-id-12">
    <div class="bty-input-select-1">
        {!! Form::select(get_field_attr(12,'table_name')."_".get_field_attr(12,'column_name'),get_field_data(12),null,['placeholder' => get_field_attr(12,'placeholder'),'class' => 'form-control input-md']) !!}
    </div>
</fieldset>
<fieldset  id="bty-input-id-14">
    <div>
        <div>
            <label>{!! get_field_attr(14,'label') !!}</label>
        </div>
        <div>
            @if(count(get_field_data(14)))
                @foreach(get_field_data(14) as $key => $item)
                    <input name="{!! get_field_attr(14,'table_name')."_".get_field_attr(14,'column_name') !!}"  value="{{ $key }}" type="radio" class="bty-input-radio-1" id="bty-gender-form-{{ $key }}">
                    <label for="bty-gender-form-{{$key}}">{{$item}}</label>
                @endforeach
            @endif
        </div>
        <div class="bty-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
            <span>Tooltip text</span>
        </div>
    </div>
</fieldset>
</div>
<button type="submit" class="bty-btn bty-btn-save"><span>Save</span></button>

