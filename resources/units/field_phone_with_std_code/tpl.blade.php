{!! BBstyle($_this->path.DS.'css/main.css') !!}

{!! BBstyle($_this->path.DS.'css/intlTelInput.css') !!}

<form>
    <div class="{{isset($settings["flag_style"]) ? $settings["flag_style"] : ''}} {{isset($settings["input_style"]) ? $settings["input_style"] : ''}} {{isset($settings["list_style"]) ? $settings["list_style"] : ''}}">
        <input id="phone" type="tel">
    </div>
</form>

{!! BBscript($_this->path.DS.'js/intlTelInput.min.js') !!}

<script>
    $(document).ready(function () {
        $("#phone").intlTelInput();
    });

</script>