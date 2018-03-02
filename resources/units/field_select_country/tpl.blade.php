{!! BBstyle($_this->path.DS.'css/main.css') !!}
{!! BBstyle($_this->path.DS.'css/countrySelect.min.css') !!}
<form>
    <div>
    <input type="text" id="country" />
    <input type="hidden" id="country_code" />
    </div>
</form>

{!! BBscript($_this->path.DS.'js/countrySelect.min.js') !!}

<script>
    $( document ).ready(function() {
        $("#country").countrySelect();
    });

</script>