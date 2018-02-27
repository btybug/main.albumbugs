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
                            <select name="radio_inp" id="" class="form-control">
                                <option value="">Select rating</option>
                                <option value="">Style 1</option>
                                <option value="">Style 2</option>
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
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Show</label>
                            <div class="col-sm-8">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="manual_item">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Stars</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="star_setting[stars]" type="number" value="{{isset($settings['star_setting']['stars']) ? $settings['star_setting']['stars'] : 5}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Step</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="star_setting[step]" type="number" value="{{isset($settings['star_setting']['step']) ? $settings['star_setting']['step'] : 0.5}}">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-2">
                            <label>Size</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::select('star_setting[size]',['md'=>'md','xl'=>'xl','lg'=>'lg','sm'=>'sm','xs'=>'xs'],isset($settings["star_setting"]["size"]) ? $settings["star_setting"]["size"] : null,["class"=>'form-control']) !!}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Disable</label>
                            <div class="col-sm-8">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="star_setting[disabled]" {{isset($settings['star_setting']['disabled']) ? 'checked' : ''}}>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Animate</label>
                            <div class="col-sm-8">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="star_setting[animate]" {{isset($settings['star_setting']['animate']) ? 'checked' : ''}}>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Show reset</label>
                            <div class="col-sm-8">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Show caption</label>
                            <div class="col-sm-8">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
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
{!! BBstyle($_this->path.DS.'css'.DS.'settings.css') !!}