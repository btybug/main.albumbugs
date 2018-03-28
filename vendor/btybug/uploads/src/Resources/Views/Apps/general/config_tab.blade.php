<div class="col-md-12">
    <div class="form-group">
        <label>
            Select Table
        </label>
        {!! Form::select('table',['' => 'Select'] + BBGetTables(),null,['class' => 'form-control custom_table']) !!}
    </div>
    <div class="form-group">
        <label>
            Select Row
        </label>
        {!! Form::select('row',['' => 'Select'] +
        ['specific' => 'specific row / rows','filtered' => 'Filtered row / rows'],null,['class' => 'form-control custom_row']) !!}
    </div>
    <div class="filtered hide">
        <div class="form-group">
            <div class="options-box">
                <div class="cust-group append_here">

                </div>
                <a href="javascript:void(0)" class="btn btn-md btn-info cust-btn pull-right add_new_field"><i
                            class=" fa fa-plus"></i></a>
            </div>
        </div>
        <div class="clearfix"></div>
        {{--<div class="form-group number-box">--}}
        {{--<label>--}}
        {{--How Many number of row you want ?--}}
        {{--</label>--}}
        {{--{!! Form::number('count',null,['class' => 'form-control','min' => 1]) !!}--}}
        {{--</div>--}}
    </div>
    <div class="specific hide">

    </div>
</div>

{!! BBstyle("public/css/select2/select2.min.css") !!}
{!! BBstyle(modules_path("uploads/src/Resources/Views/Apps/general/assets/cssgeneral_css.css")) !!}

{!! BBscript('public/js/select2/select2.full.min.js') !!}
{!! BBscript(modules_path("uploads/src/Resources/Views/Apps/general/assets/js/general_js.js")) !!}