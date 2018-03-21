<div class="form-group form-horizontal">
    <div class="col-md-12">
        <div class="col-md-5">
            <label class="col-md-4 control-label">Select column</label>
            <div class="col-md-8">
                {!! Form::select("conditions[$slug][column]",BBGetTableColumn($table),null,['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <label class="col-md-2 control-label">Value</label>
            <div class="col-md-5">
                {!! Form::select("conditions[$slug][value]",
                    ['equal' => 'equal','not_equal' => 'not equal','contains' => 'contains']
                    ,null,['class' => 'form-control']) !!}
            </div>
            <div class="col-md-5">
                {!! Form::text("conditions[$slug][expression]",null,['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-sm btn-danger pull-right remove_this_field"><i class=" fa fa-minus"></i></button>
        </div>
    </div>
    <div class="col-md-12">
        {!! Form::select("conditions[$slug][condition]",
        ['and' => 'and','or' => 'or']
        ,null,['class' => 'form-control']) !!}
    </div>
    <div class="clearfix"></div>
    <div class="inside-conditions">

    </div>
    <div class="col-md-12">
        <a href="javascript:void(0)" data-slug="{{ $slug }}" class="btn btn-md btn-info pull-right add_new_inside"><i class=" fa fa-plus"></i></a>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12">
        {!! Form::select("conditions[$slug][logic_condition]",
            ['and' => 'and','or' => 'or']
       ,null,['class' => 'form-control']) !!}
    </div>
</div>