{!! BBstyle($_this->path.DS.'css/main.css') !!}
{!! BBstyle($_this->path.DS.'css/bootstrap-datepicker.min.css') !!}
<div>
    <div id="event_period">
        @if(isset($settings["datepicker_setting"]["type"]) && $settings["datepicker_setting"]["type"] == "component")
            <div class="input-group date">
                <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
            </div>
        @elseif(isset($settings["datepicker_setting"]["type"]) && $settings["datepicker_setting"]["type"] == "embedded")
            <div></div>
        @elseif(isset($settings["datepicker_setting"]["type"]) && $settings["datepicker_setting"]["type"] == "range")
            <div class="input-daterange input-group" id="datepicker">
                <input type="text" class="input-sm form-control" name="start" />
                <span class="input-group-addon">to</span>
                <input type="text" class="input-sm form-control" name="end" />
            </div>
        @else
            <input type="text" class="actual_range" id="custom_datepicker">
        @endif
    </div>
</div>
<textarea id="datepicker_setting" class="hidden">{{isset($settings["datepicker_setting"]) ? json_encode($settings["datepicker_setting"],true) : ''}}</textarea>
{!! BBscript($_this->path.DS.'js/bootstrap-datepicker.min.js') !!}

<script>

    window.frameElement.contentWindow.targetFunction(1);

    function targetFunction(is_called){
        if(is_called) {
            var hidden_data = $('#datepicker_setting').val();
            if(hidden_data){
                hidden_data = JSON.parse(hidden_data);
            }
            var data = {};
            data.datepicker_setting = hidden_data;
            getSettings(data);
        }
    }
    function getSettings(data){
        var obj = $("#event_period");
        if(typeof window.onload === 'function'){
            console.log(data.datepicker_setting);return;
            var type = data.datepicker_setting.type;
            var finall_settings = data.datepicker_setting;
            if(type && type === "component"){
                return obj.children('.input-group.date').datepicker('update',finall_settings);
            }else if(type && type === "embedded"){
                return obj.children('div').datepicker('update',finall_settings);
            }else if(type && type === "range"){
                return obj.children('.input-daterange').datepicker('update',finall_settings);
            }
            return obj.children("input").datepicker('update',finall_settings);
        }else{
            window.onload = function(){
                if(obj.length) {
                    if(!data.datepicker_setting){
                        return obj.children("input").datepicker();
                    }
                    data.datepicker_setting.autoclose = data.datepicker_setting.autoclose && data.datepicker_setting.autoclose == 'true' ? true : false;
                    data.datepicker_setting.calendarWeeks = data.datepicker_setting.calendarWeeks && data.datepicker_setting.calendarWeeks == 'true' ? true : false;
                    data.datepicker_setting.clearBtn = data.datepicker_setting.clearBtn && data.datepicker_setting.clearBtn == 1 ? true : false;
                    data.datepicker_setting.format = data.datepicker_setting.custom_format ? data.datepicker_setting.custom_format : "mm/dd/yyyy";
                    data.datepicker_setting.endDate = data.datepicker_setting.endDate ? data.datepicker_setting.endDate : "mm/dd/yyyy";

                    var type = data.datepicker_setting.type;
                    var finall_settings = data.datepicker_setting;
                    if(type && type === "component"){
                        return obj.children('.input-group.date').datepicker('update',finall_settings);
                    }else if(type && type === "embedded"){
                        return obj.children('div').datepicker('update',finall_settings);
                    }else if(type && type === "range"){
                        return obj.children('.input-daterange').datepicker('update',finall_settings);
                    }
                    return obj.children("input").datepicker('update',finall_settings);
                }
            }
        }
    }

</script>