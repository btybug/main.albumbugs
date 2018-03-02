{!! BBstyle($_this->path.DS.'css/main.css') !!}
{!! BBstyle($_this->path.DS.'css/countrySelect.css') !!}

<form>
    <div class="form-item">
        <input id="country_selector" type="text" class="{{isset($settings["container_class"]) ? $settings["container_class"] : ''}}">
    </div>
</form>

<textarea id="excluded" class="hidden">{{isset($settings["excluded_countries"]) ? json_encode($settings["excluded_countries"],true) : ''}}</textarea>
<style>
    .country-select .flag{
        width:20px;
        height:15px;
        -webkit-box-shadow:0px 0px 1px 0px #888;
        box-shadow:0px 0px 1px 0px #888;
        background-image:url({{$_this->path.DS.'img/flags.png'}});
        background-repeat:no-repeat;
        background-color:#dbdbdb;
        background-position:20px 0
    }
    @media only screen and (-webkit-min-device-pixel-ratio: 2),
    only screen and (min--moz-device-pixel-ratio: 2),
    only screen and (min-device-pixel-ratio: 2),
    only screen and (min-resolution: 192dpi),
    only screen and (min-resolution: 2dppx){
        .country-select .flag{
            background-image:url({{$_this->path.DS."img/flags@2x.png"}})
        }
    }
</style>
{!! BBscript($_this->path.DS.'js/countrySelect.min.js') !!}

<script>
    $( document ).ready(function() {
        var countryData = $.fn.countrySelect.getCountryData();
        var hidden_data = $('#excluded').val();
        if(hidden_data){
            hidden_data = JSON.parse(hidden_data);
            hidden_data = hidden_data.map(function(item,index){
                return item.toLowerCase();
            });
        }else{
            hidden_data = undefined;
        }
        $("#country_selector").countrySelect({
            //defaultCountry: "jp",
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do']
            //preferredCountries: ['ca', 'gb', 'us']
            excludeCountries:hidden_data
        });
    });
</script>