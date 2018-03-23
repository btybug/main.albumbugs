<div class="removable_parent">
    <div class="col-md-12 m-10">
        <div class="col-md-5">
            <label class="col-md-4 control-label">Select column</label>
            <div class="col-md-8">
                {!! Form::select("conditions[$slug][$new_slug][column]",BBGetTableColumn($table),(isset($inside['column'])) ? $inside['column'] : null,['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <label class="col-md-2 control-label">Value</label>
            <div class="col-md-5">
                {!! Form::select("conditions[$slug][$new_slug][operator]",
                    [
                        'equal' => 'Equal',
                        'not_equal' => 'Not equal',
                        'more' => '>',
                        'less' => '<',
                        'more_and_equal' => '>=',
                        'less_and_equal' => '<=',
                        'contains' => 'Contains',
                        'not_contains' => 'Not contains',
                        'in' => 'In',
                        'not_in' => 'Not in',
                        'between' => 'Between',
                        'not_between' => 'Not between',
                        'single_date' => 'Single Date',
                        'between_date' => 'Between Date',
                        'not_between_date' => 'Not between Date',
                        'is_null' => 'Is NULL',
                        'not_is_null' => 'Is not NULL',
                    ]
                    ,(isset($inside["operator"])) ? $inside['operator'] : null,['class' => 'form-control']) !!}
            </div>
            <div class="col-md-5">
                {!! Form::text("conditions[$slug][$new_slug][expression]",(isset($inside["expression"])) ? $inside['expression'] : null,['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-sm btn-danger pull-right remove_this_field"><i class=" fa fa-minus"></i></button>
        </div>
    </div>
    <div class="col-md-2 col-md-offset-5">
        {!! Form::select("conditions[$slug][$new_slug][condition]",
        ['and' => 'and','or' => 'or']
        ,(isset($inside['condition'])) ? $inside['condition'] : null,['class' => 'form-control']) !!}
    </div>
    <div class="clearfix"></div>
</div>