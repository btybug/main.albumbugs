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
<div class="col-md-6">

    <fieldset class="bty-form-radio formgeneral" id="bty-input-id-0">
        <div class="form-group">

            <label class="col-sm-6 control-label">
            <span class="input-group-addon col-md-2">
                    <i class="fa {!! issetReturn($settings,'icon',null) !!}"></i>
                </span>{!! issetReturn($settings,'label',null) !!}</label>
            <div class="col-sm-12">
                @if(count($arr))
                    @foreach($arr as $key => $item)
                        <div class="radio block">
                            <label>
                                <input name="table_name_column_name" value="{{ $key }}" type="radio"
                                       id="bty-gender-form-{{ $key }}">
                                {{$item}}
                            </label>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="col-sm-3">
            <span class="input-group-addon tooltip1">
                        <i class="fa {!! issetReturn($settings,'tooltip_icon',null)!!}"></i>
                    <span class="tooltiptext">{!! issetReturn($settings,'help',null) !!}</span>
            </span>
            </div>
        </div>
    </fieldset>

</div>


