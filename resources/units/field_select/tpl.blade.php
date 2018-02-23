@php
    $arr = [];
    if(isset($settings['json_data']) && count($settings['json_data'])){
        switch ($settings['data_source']){
            case "related" :
                if(isset($settings['json_data']['data_source_table_name']) && isset($settings['json_data']['data_source_columns'])){
                    $table = $settings['json_data']['data_source_table_name'];
                    $column = $settings['json_data']['data_source_columns'];
                    if (\Schema::hasColumn($table, $column)) {
                        $result = \DB::table($table)->pluck($column,'id');
                        $arr =  (count($result)) ? $result->toArray() : [];
                    }
                }
                break;
            case "manual" :
                if(isset($settings['json_data']['manual']) && $settings['json_data']['manual']){
                    $arr = (count(explode(',',$settings['json_data']['manual']))) ? explode(',',$settings['json_data']['manual']) : [];
                }
                break;
        }
    }
@endphp
<fieldset class="bty-form-radio formgeneral" id="bty-input-id-0">
    <div class="form-group">
        <label class="col-sm-12 control-label">{!! issetReturn($settings,'label',null) !!}</label>
        <div class="{!! issetReturn($settings,'select_inp',null) !!}">
            <select name="table_name_column_name" class="form-control">
                <option value="{!! issetReturn($settings,'default_key',null) !!}">{!! issetReturn($settings,'default_text',null) !!}</option>
            @if(count($arr))
                @foreach($arr as $key => $item)
                    <option   value="{{ $key }}" type="radio" id="bty-gender-form-{{ $key }}">  {{$item}}</option>
                @endforeach
            @endif
            </select>
        </div>
        <div class="clearfix"></div>
    </div>
</fieldset>

@if(isset($settings['manual_item']) && count($settings['manual_item']))
    <fieldset class="bty-form-radio formgeneral" id="bty-input-id-0">
        <div class="form-group">
            <label class="col-sm-12 control-label">{!! issetReturn($settings,'label',null) !!}</label>
            <div class="{!! issetReturn($settings,'select_inp',null) !!}">
                <select name="table_name_column_name" class="form-control">
                    <option value="{!! issetReturn($settings,'default_key',null) !!}">{!! issetReturn($settings,'default_text',null) !!}</option>

                    @foreach($settings['manual_item'] as $key => $item)
                            <option   value="{{ $key }}" type="radio" id="bty-gender-form-{{ $key }}">  {{$item}}</option>
                        @endforeach

                </select>
            </div>
            <div class="clearfix"></div>
        </div>
    </fieldset>
@endif
