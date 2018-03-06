{!! BBstyle($_this->path.DS.'css/main.css') !!}
{!! BBstyle($_this->path.DS.'css/bootstrap-datepicker.min.css') !!}
{!! BBstyle($_this->path.DS.'css/jquery.timepicker.min.css') !!}
    <div>
        <input id="basicExample" type="text" class="timepic" data-time-format="H:i:s" >
    </div>

{!! BBscript($_this->path.DS.'js/bootstrap-datepicker.min.js') !!}
{!! BBscript($_this->path.DS.'js/jquery.timepicker.min.js') !!}

<script>
    $(function() {
        $('#basicExample').timepicker({
            'disableTextInput': true
        });
    });


</script>