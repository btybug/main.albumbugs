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
    <div class="row visibility-box {!! (1) ? "show" : "hide" !!}">
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
                                <input class="form-control" name="star_setting[stars]" type="number"
                                       value="{{isset($settings['star_setting']['stars']) ? $settings['star_setting']['stars'] : 5}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Step</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="star_setting[step]" type="number"
                                       value="{{isset($settings['star_setting']['step']) ? $settings['star_setting']['step'] : 0.5}}">
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
                                    <input type="checkbox"
                                           name="star_setting[disabled]" {{isset($settings['star_setting']['disabled']) ? 'checked' : ''}}>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Animate</label>
                            <div class="col-sm-8">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox"
                                           name="star_setting[animate]" {{isset($settings['star_setting']['animate']) ? 'checked' : ''}}>
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
                                    <input type="checkbox"
                                           name="star_setting[showClear]" {{isset($settings['star_setting']['showClear']) ? 'checked' : ''}}>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Show caption</label>
                            <div class="col-sm-8">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox"
                                           name="star_setting[showCaption]" {{isset($settings['star_setting']['showCaption']) ? 'checked' : ''}}>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="fieldicon" class="col-sm-3 p-l-0 control-label m-0 text-left">Empty Icon</label>
                            <div class="col-sm-8">
                                {!!Form::text('star_setting[emptyStar]',isset($settings["star_setting"]["emptyStar"])?$settings["star_setting"]["emptyStar"]:null,['class' => 'form-control icpp'])  !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="fieldicon" class="col-sm-3 m-0 control-label text-left">Filled Icon</label>
                            <div class="col-sm-8">
                                {!!Form::text('star_setting[filledStar]',isset($settings["star_setting"]["filledStar"])?$settings["star_setting"]["filledStar"]:null,['class' => 'form-control icpp','id'=>'tooltip-icon'])  !!}

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-2">
                            <label>Field color</label>
                        </div>
                        <div class="col-md-9">
                            <select name="custom_color" id="" class="form-control">
                                <option value="">Select color</option>
                                <option value="rating-cl-black">black</option>
                                <option value="rating-cl-grey">grey</option>
                                <option value="rating-cl-skyblue">skyblue</option>
                                <option value="rating-cl-darksalmon">darksalmon</option>
                                <option value="rating-cl-deeppink">deeppink</option>
                                <option value="rating-cl-fuchsia">fuchsia</option>
                                <option value="rating-cl-brown">brown</option>
                                <option value="rating-cl-red">red</option>
                                <option value="rating-cl-cyan">cyan</option>
                                <option value="rating-cl-lightcoral">lightcoral</option>
                                <option value="rating-cl-darkorange">darkorange</option>
                                <option value="rating-cl-forestgreen">forestgreen</option>
                                <option value="rating-cl-yellow">yellow</option>
                                <option value="rating-cl-crimson">crimson</option>
                                <option value="rating-cl-deepskyblue">deepskyblue</option>
                                <option value="rating-cl-darkblue">darkblue</option>
                                <option value="rating-cl-peru">peru</option>
                                <option value="rating-cl-orange">orange</option>
                            </select>
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
    <div class="row visibility-box {!! (1) ? "show" : "hide" !!}">
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#uploadsettings"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Settings</span>
                </a>
            </div>
            <div id="uploadsettings" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Allow Images</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Images extensions</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Image Size</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <strong>MB</strong>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Unlimitted upload</label>
                                <div class="col-sm-2">
                                    <div class="input-checkbox-5-bty">
                                        <input type="checkbox" id="unlimupload">
                                        <label for="unlimupload"></label>
                                    </div>
                                </div>
                                <label class="col-sm-3 control-label text-right">No of images</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Allow video</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Video extensions</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Video Size</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <strong>MB</strong>
                                </div>
                                <label class="col-sm-2 control-label text-right">No of video</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Allow music</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Music extensions</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Music Size</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <strong>MB</strong>
                                </div>
                                <label class="col-sm-2 control-label text-right">No of music</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Allow docs</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Docs extensions</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Docs Size</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <strong>MB</strong>
                                </div>
                                <label class="col-sm-2 control-label text-right">No of docs</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Allow Download</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-5-bty">
                                    <input type="checkbox" id="setdownload">
                                    <label for="setdownload"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="col-sm-7 control-label text-left">Total maximum size to upload</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <strong>MB</strong>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row visibility-box {!! (1) ? "show" : "hide" !!}">
        <div class="bty-panel-collapse">
            <div>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#uploadbesic"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title"> Basic</span>
                </a>
            </div>
            <div id="uploadbesic" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Browse Button</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="col-md-4">
                                <label class="control-label text-left">Title</label>
                                <div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label text-left">Select Icon</label>
                                <div>
                                    {!!Form::text('star_setting[filledStar]',isset($settings["star_setting"]["filledStar"])?$settings["star_setting"]["filledStar"]:null,['class' => 'form-control icpp','id'=>'tooltip-icon'])  !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label text-left">Select Class</label>
                                <div>
                                    <select name="" id="" class="form-control">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Upload Button</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="col-md-4">
                                <label class="control-label text-left">Title</label>
                                <div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label text-left">Select Icon</label>
                                <div>
                                    {!!Form::text('star_setting[filledStar]',isset($settings["star_setting"]["filledStar"])?$settings["star_setting"]["filledStar"]:null,['class' => 'form-control icpp','id'=>'tooltip-icon'])  !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label text-left">Select Class</label>
                                <div>
                                    <select name="" id="" class="form-control">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Remove Button</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="col-md-4">
                                <label class="control-label text-left">Title</label>
                                <div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label text-left">Select Icon</label>
                                <div>
                                    {!!Form::text('star_setting[filledStar]',isset($settings["star_setting"]["filledStar"])?$settings["star_setting"]["filledStar"]:null,['class' => 'form-control icpp','id'=>'tooltip-icon'])  !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label text-left">Select Class</label>
                                <div>
                                    <select name="" id="" class="form-control">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-8 control-label text-left">Show Caption</label>
                            <div class="col-sm-3">
                                <div class="input-checkbox-5-bty">
                                    <input type="checkbox" id="showcaption">
                                    <label for="showcaption"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="col-sm-8 control-label text-left">Show Cancel</label>
                            <div class="col-sm-3">
                                <div class="input-checkbox-5-bty">
                                    <input type="checkbox" id="showCancel">
                                    <label for="showCancel"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="col-sm-8 control-label text-left">Show Upload</label>
                            <div class="col-sm-3">
                                <div class="input-checkbox-5-bty">
                                    <input type="checkbox" id="showupload">
                                    <label for="showupload"></label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-8 control-label text-left">Show Preview</label>
                            <div class="col-sm-3">
                                <div class="input-checkbox-5-bty">
                                    <input type="checkbox" id="showpreview">
                                    <label for="showpreview"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="col-sm-8 control-label text-left">Show Remove</label>
                            <div class="col-sm-3">
                                <div class="input-checkbox-5-bty">
                                    <input type="checkbox" id="showremove">
                                    <label for="showremove"></label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! BBstyle($_this->path.DS.'css'.DS.'settings.css') !!}
{!! HTML::style('public/css/font-awesome/css/fontawesome-iconpicker.min.css') !!}
{!! HTML::script('public/css/font-awesome/js/fontawesome-iconpicker.min.js') !!}
<script>
    $('.icpp').iconpicker();
    $( document ).ready(function() {
        var checkClick = $('.checkClick');
        var checkBlock = $('.checkBlock');
        checkBlock.hide();
        checkClick.on('click', function() {
            if($(this).is(':checked')) {
                $(this).closest('.form-group').find(checkBlock).show();
            } else {
                $(this).closest('.form-group').find(checkBlock).hide();

            }
        });

    });
</script>