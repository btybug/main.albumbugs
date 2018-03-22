<div class="custom_removable_general_parent">
    <div class="form-group form-horizontal col-md-11">
        <div class="col-md-12 m-10">
            <div class="col-md-5">
                <label class="col-md-4 control-label">Select column</label>
                <div class="col-md-8">
                    {!! Form::select("conditions[$slug][$new_slug][column]",BBGetTableColumn($table),null,['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-2 control-label">Value</label>
                <div class="col-md-5">
                    {!! Form::select("conditions[$slug][$new_slug][value]",
                        ['equal' => 'equal','not_equal' => 'not equal','contains' => 'contains']
                        ,null,['class' => 'form-control']) !!}
                </div>
                <div class="col-md-5">
                    {!! Form::text("conditions[$slug][$new_slug][expression]",null,['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-sm btn-danger pull-right remove_this_field"><i class=" fa fa-minus"></i></button>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-5">
            {!! Form::select("conditions[$slug][$new_slug][condition]",
            ['and' => 'and','or' => 'or']
            ,null,['class' => 'form-control']) !!}
        </div>
        <div class="clearfix"></div>
        <div class="inside-conditions">

        </div>
        <div class="col-md-12 text-center m-10">
            <a href="javascript:void(0)" data-slug="{{ $slug }}" class="btn btn-md btn-info cust-btn add_new_inside"><i class=" fa fa-plus"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-1 text-center">
        <button type="button" class="btn btn-md btn-danger custom_general_remove"><i class=" fa fa-minus"></i></button>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-1 col-md-offset-5 m-b-10">
        {!! Form::select("conditions[$slug][logic_condition]",
            ['and' => 'and','or' => 'or']
       ,null,['class' => 'form-control']) !!}
    </div>
</div>
