<input data-toggle="datepicker" class="form-control input-sm">
{!! BBstyle($_this->path.DS.'css'.DS.'themes'.DS.'datepicker.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'datepicker.js') !!}
{!! BBscript($_this->path.DS.'js'.DS.'picker.date.js') !!}
<script>
$(function () {
    $('[data-toggle="datepicker"]').datepicker();
})

</script>