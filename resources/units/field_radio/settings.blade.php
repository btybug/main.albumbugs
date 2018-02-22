<div class="col-md-12  m-t-20">
    <div class="row" style="color: black">

        <div class="row  visibility-box  {!! (1) ? "show" : "hide" !!}" style="color: black">
            <div class="panel panel-default p-0">
                <div class="panel-heading">Input Setting</div>
                <div class="panel-body">
                    <div class="form-group col-md-12 m-b-10">
                        <div class="col-md-6">
                            <label for="lablename" class="col-sm-3 p-l-0 control-label m-0  text-left">Label
                                name</label>
                            <div class="col-sm-8">
                                {!! Form::text('label',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="placeholder" class="col-sm-3 control-label m-0 text-left ">Placeholder</label>
                            <div class="col-sm-8">
                                {!! Form::text('placeholder',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12 m-b-10">
                        <div class="col-md-6">
                            <label for="fieldicon" class="col-sm-3 p-l-0 control-label m-0 text-left">Field Icon</label>
                            <div class="col-sm-8">
                                {!!Form::text('icon',null,['class' => 'form-control icp','readonly'])  !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tooltip-icon" class="col-sm-3 m-0 control-label text-left">Tooltip Icon</label>
                            <div class="col-sm-8">
                                {!!Form::text('tooltip_icon',null,['class' => 'form-control icp','readonly','id'=>'tooltip-icon'])  !!}

                            </div>
                        </div>

                    </div>
                    <div class="form-group col-md-12 m-b-10">
                        <div class="col-md-6">
                            <label for="help" class="col-sm-3 m-0 control-label text-left">help</label>
                            <div class="col-sm-8">
                                {!! Form::textarea('help',null,['class'=>'form-control','id'=>'help']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12 m-b-10">
                        <div class="form-group col-md-6 m-b-10">
                            <label  for='validation_message' class="col-sm-3 m-0 control-label text-left">Error Message</label>
                            <div class="col-sm-8">
                                {!! Form::textarea('validation_message',null,['class' => 'form-control','id'=>'validation_message']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row visibility-box {!! (1) ? "show" : "hide" !!}">
            <div class="panel panel-default p-0">
                <div class="panel-heading">Input Data</div>
                <div class="panel-body">

                    <div class="col-md-6">
                        <div class="row m-b-10 mapping-column">
                            {{--@include("console::structure.developers._partials.mapping-column")--}}
                        </div>
                    </div>
                    <div class="form-group col-md-6 m-b-10">
                        <label class="col-sm-3 p-l-0 control-label m-0  text-left">Extra Validation</label>
                        <div class="col-sm-8">
                            {!! Form::text('extravalidation',null,['class' => 'form-control core-val']) !!}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>