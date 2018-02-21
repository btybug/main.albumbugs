<fieldset class="bty-form-radio formgeneral" id="bty-input-id-{!! issetReturn($source,'id',null) !!}">
    <div class="form-group">
        <label class="col-sm-12 control-label">{!! issetReturn($settings,'label',null) !!}</label>
        <div class="col-sm-12">
            @if(count())
                @foreach(get_field_data($field) as $key => $item)
                    <div class="radio block">
                        <label>
                            <input name="{!! $field['table_name']."_".$field['column_name'] !!}"  value="{{ $key }}" type="radio" id="bty-gender-form-{{ $key }}">
                            {{$item}}
                        </label>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</fieldset>
{!! BBRenderUnits() !!}