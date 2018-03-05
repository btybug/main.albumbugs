{!! BBstyle($_this->path.DS.'css/main.css') !!}

{!! BBstyle($_this->path.DS.'css/bootstrap-datepicker.min.css') !!}
<div>
    <div id="event_period">
        <input type="text" class="actual_range">
        <input type="text" class="actual_range">
    </div>
</div>



{!! BBscript($_this->path.DS.'js/bootstrap-datepicker.min.js') !!}

<script>
    $(document).ready(function () {
        $('#event_period').datepicker({
            inputs: $('.actual_range')
        });
    });

</script>