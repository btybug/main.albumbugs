@php
$validations=\Sahak\Validator\Models\Validations::pluck('title','code');
@endphp

<div class="col-md-12">
    <div class="row  visibility-box  {!! (1) ? "show" : "hide" !!}">
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#inputsetting"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Input Setting</span>
                </a>
            </div>
            <div id="inputsetting" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">
                    <div class="form-group col-md-12">
                        <div class="col-md-2">
                            <label>Field style</label>
                        </div>
                        <div class="col-md-9">
                            <select name="checkbox_inp" id="" class="form-control">
                                <option value="">Select checkbox</option>
                                <option value="input-checkbox-1-bty">checkbox-1</option>
                                <option value="input-checkbox-2-bty">checkbox-2</option>
                                <option value="input-checkbox-3-bty">checkbox-3</option>
                                <option value="input-checkbox-4-bty">checkbox-4</option>
                                <option value="input-checkbox-7-bty">checkbox-5</option>
                                <option value="input-checkbox-8-bty">checkbox-6</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="lablename" class="col-sm-3 p-l-0 control-label m-0  text-left">Label
                                name</label>
                            <div class="col-sm-8">
                                {!! Form::text('label',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="fieldicon" class="col-sm-3 p-l-0 control-label m-0 text-left">Field Icon</label>
                            <div class="col-sm-8">
                                {!!Form::text('icon',null,['class' => 'form-control icp'])  !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tooltip-icon" class="col-sm-3 m-0 control-label text-left">Tooltip Icon</label>
                            <div class="col-sm-8">
                                {!!Form::text('tooltip_icon',null,['class' => 'form-control icp','id'=>'tooltip-icon'])  !!}

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="help" class="col-sm-3 m-0 control-label text-left">help</label>
                            <div class="col-sm-8">
                                {!! Form::textarea('help',null,['class'=>'form-control','id'=>'help']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for='validation_message' class="col-sm-3 m-0 control-label text-left">Error
                                Message</label>
                            <div class="col-sm-8">
                                {!! Form::textarea('validation_message',null,['class' => 'form-control','id'=>'validation_message']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
    <div  class="row visibility-box {!! (1) ? "show" : "hide" !!}">
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#inputdata"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Input Data</span>
                </a>
            </div>
            <div id="inputdata" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">
                    <div class="col-md-12">
                        <div class="row m-b-10 mapping-column">
                            @include($_this->slug."::mapping-column")
                        </div>
                    </div>
                    <div class="form-group col-md-12 m-b-10">
                        <label class="col-sm-4 p-l-0 control-label m-0  text-left">Extra Validation</label>
                        <div class="col-sm-8">
                            {!! Form::text('extravalidation',null,['class' => 'form-control core-val']) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
{!! BBstyle($_this->path.DS.'css'.DS.'settings.css',$_this) !!}