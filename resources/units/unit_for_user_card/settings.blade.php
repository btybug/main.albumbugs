@option('name','f',$data)
<div class="content bty-settings-panel">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Name Area Type</label>
            </div>
            <div class="col-md-8">
                {!! Form::select('name_type',[null=>'Select Content Type','static'=>'Static','dynamic'=>'Dynamic'],null,['class'=>'form-control name_type','data-value'=>'name']) !!}
            </div>
        </div>
    </div>
</div>
<div id="name_type_static_name_static"
     class="name_type_name collapse in @if(issetReturn($settings,'tr_content_type') !=='unit') hide   @endif"
     data-type="unit" aria-expanded="true" style="">
    <div class="content bty-settings-panel">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-4">
                    <label for="">Static Name</label>
                </div>
                <div class="col-md-8">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
        </div>

    </div>
</div>
@endoption

<script>
    $(function () {
        $('.name_type').on('change', function () {
            var panel = $(this).data('value');
            $('.name_type_' + panel).addClass('hide');
            var id = '#name_type_static_' + panel + '_' + $(this).val();
            $(id).removeClass('hide');
        });
    });
</script>





