@option('general','f',$data)
<div class="content bty-settings-panel">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Functions</label>
            </div>
            <div class="col-md-8">
                {!! Form::select('main_function',[
                null=>'Main Function',
                'authUser'=>'Auth User',
                'specificUser'=>'Specific User',
                'specificUsers'=>'Specific Users'],null,['class'=>'form-control double-select','data-value'=>'main']) !!}
            </div>
        </div>
    </div>
</div>
<div id="main_function_main_specificUser"
     class="main_function_main collapse in @if(issetReturn($settings,'main_function') !=='specificUser') hide   @endif"
     data-type="unit" aria-expanded="true" style="">
    <div class="content bty-settings-panel">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-4">
                    <label for="">Static Name</label>
                </div>
                <div class="col-md-8">
                    {!! Form::select('specificUser',\Btybug\User\User::all()->pluck('username','id'),null,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

    </div>
</div>
@endoption

@option('name','f',$data)
<div class="content bty-settings-panel">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Name Area Type</label>
            </div>
            <div class="col-md-8">
                {!! Form::select('name_type',[null=>'Select Content Type','static'=>'Static','dynamic'=>'Dynamic'],null,['class'=>'form-control double-select','data-value'=>'name']) !!}
            </div>
        </div>
    </div>
</div>
<div id="name_type_name_static"
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
        $('body').on('change','.double-select', function () {
            var prefix=$(this).attr('name')+'_';
            var panel = $(this).data('value');

            $('.'+prefix + panel).addClass('hide');
            var id = '#'+prefix+panel + '_' + $(this).val();
            console.log(prefix+panel)
            $(id).removeClass('hide');
        });
    });
</script>





