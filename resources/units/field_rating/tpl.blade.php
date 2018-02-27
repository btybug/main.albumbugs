{!! BBstyle($_this->path.DS.'css/main.css') !!}
{!! BBstyle($_this->path.DS.'css/star-rating.css') !!}
{!! BBstyle($_this->path.DS.'css/theme.css') !!}
<div class="form-group">
    <div class="{!! issetReturn($settings,'radio_inp',null) !!}">
        <h4>
            @if(has_setting($settings, 'icon'))
                <i class="fa {!! issetReturn($settings,'icon',null) !!}"></i>
            @endif
            {!! issetReturn($settings,'label',null) !!}
            @if(has_setting($settings, 'tooltip_icon'))
                <span title="{!! issetReturn($settings,'help',null) !!}">
                <i class="fa {!! issetReturn($settings,'tooltip_icon',null) !!}"></i>
            </span>
            @endif
        </h4>
    </div>
</div>
<textarea id="star_setting" class="hidden">{{isset($settings["star_setting"]) ? json_encode($settings["star_setting"],true) : ''}}</textarea>
@if(isset($settings['manual_item']))
    <div class="form-group">
        <div>
            <div class="input-group">
                <div class="">
                    <label for="input-1" class="control-label"></label>
                    <input id="input-1" name="star" value="" class="rating-loading">
                </div>
            </div>
        </div>
    </div>
@endif
{!! BBscript($_this->path.DS.'js/star-rating.js') !!}
{!! BBscript($_this->path.DS.'js/theme.js') !!}
<script>

    window.frameElement.contentWindow.targetFunction(1);

    function targetFunction(is_called){
        if(is_called) {
            var hidden_data = $('#star_setting').val();
            if(hidden_data){
                hidden_data = JSON.parse(hidden_data);
            }
            var data = {};
            data.manual_item = {{isset($settings["manual_item"]) ? 1 : 0}};
            data.star_setting = hidden_data;
            getStars(data);
        }
    }
    function getStars(data){
        if(typeof window.onload == 'function'){
            if (data.manual_item) {
                $("#input-1").rating('refresh', data.star_setting);
            }
        }else{
            window.onload = function(){
                if($("#input-1").length) {
                   data.star_setting.step = data.star_setting.step ? data.star_setting.step : 0.5;
                   data.star_setting.stars = data.star_setting.stars ? data.star_setting.stars : 5;
                   data.star_setting.max = data.star_setting.max ? data.star_setting.max : 5;
                   data.star_setting.min = data.star_setting.min ? data.star_setting.min : 0;
                   data.star_setting.disabled = data.star_setting.disabled && data.star_setting.disabled == "on" ? true : false;
                   data.star_setting.animate = data.star_setting.animate && data.star_setting.animate == "on" ? true : false;

                   $("#input-1").rating(data.star_setting);
                }
            }
        }
    }

</script>