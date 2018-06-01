@option('general','f',$data)
<div class="bty-settings-panel">
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
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div id="main_function_main_specificUser"
     class="main_function_main collapse in @if(issetReturn($settings,'main_function') !=='specificUser') hide   @endif"
     data-type="unit" aria-expanded="true" style="">
    <div class="bty-settings-panel">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-4">
                    <label for="">Specific User</label>
                </div>
                <div class="col-md-8">
                    {!! Form::select('specificUser',\Btybug\User\User::all()->pluck('username','id'),null,['class'=>'form-control ']) !!}

                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div>

<div id="main_function_main_specificUsers"
     class="main_function_main collapse in @if(issetReturn($settings,'main_function') !=='specificUsers') hide   @endif"
     data-type="unit" aria-expanded="true" style="">
    <div class="bty-settings-panel">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-4">
                    <label for="">Specific Users</label>
                </div>
                <div class="col-md-8">
                    {!! Form::select('specificUsers[]',\Btybug\User\User::all()->pluck('username','id'),$settings['specificUsers'],['class'=>'form-control specific-users','multiple'=>'multiple']) !!}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div>
@endoption

@option('name','f',$data)


<div class="bty-settings-panel">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-4">
                <label for="">Name Area Type</label>
            </div>
            <div class="col-md-8">
                {!! Form::select('name_type',[null=>'Select Content Type','static'=>'Static','dynamic'=>'Dynamic'],null,['class'=>'form-control double-select','data-value'=>'name']) !!}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div id="name_type_name_static"
     class="name_type_name collapse in @if(issetReturn($settings,'name_type') !=='static') hide   @endif"
     data-type="unit" aria-expanded="true" style="">
    <div class="bty-settings-panel">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-4">
                    <label for="">Static Name</label>
                </div>

                @if(issetReturn($settings,'main_function') =='specificUsers')
                    @if(isset($settings['specificUsers']))
                        @foreach($settings['specificUsers'] as $user_id)
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label for="">{!! \Btybug\User\User::find($user_id)->username !!}</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="names[{!! $user_id !!}]" class="form-control">
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</div>
@endoption


{!! BBstyle(public_path('css'.DS.'select2'.DS.'select2.min.css')) !!}
{!! BBscript(public_path('js'.DS.'select2'.DS.'select2.full.min.js')) !!}
{!! BBscript($_this->path.DS.'js'.DS.'settings.js') !!}
<script>
    $(function () {
        $('body').find('.specific-users').select2();
    });
</script>





