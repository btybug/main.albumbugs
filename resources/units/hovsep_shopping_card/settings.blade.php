@option('general','f',$data)
<div class="bty-settings-panel">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Functions</label>
            </div>
            <div class="col-md-8">

            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endoption
{!! BBscript($_this->path.DS.'js'.DS.'settings.js') !!}
<script>
    $(function () {
        $('body').find('.specific-users').select2();
    });
</script>





