{!! BBstyle($_this->path.DS.'css/main.css') !!}

{!! BBstyle($_this->path.DS.'css/intlTelInput.css') !!}

<form>
    <div>
        <input id="phone" type="tel">
        <button type="submit">Submit</button>
    </div>
</form>

{!! BBscript($_this->path.DS.'js/intlTelInput.min.js') !!}

<script>
    $(document).ready(function () {
        $("#phone").intlTelInput();
    });

</script>