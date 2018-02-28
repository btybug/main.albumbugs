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
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#uploadsettings"
                   aria-expanded="true">
                    <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    <span class="title">Settings</span>
                </a>
            </div>
            <div id="uploadsettings" class="collapse in" aria-expanded="true" style="">
                <div class="content bty-settings-panel">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-3 control-label text-left">Show Upload</label>
                            <div class="col-sm-8">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="manual_item">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="col-sm-5 control-label text-left">Allow Images</label>
                            <div class="col-sm-7">
                                <div class="input-checkbox-3-bty">
                                    <input type="checkbox" name="upload_setting[allowedFileTypes][]" value="image" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Images extensions</label>
                                <div class="col-sm-9">
                                    <select class="extensions-multiple" name="upload_setting[allowedFileExtensions][]" multiple="multiple">
                                        <option value="PNG">PNG</option>
                                        <option value="JPG">JPG</option>
                                        <option value="JPEG">JPEG</option>
                                        <option value="GIF">GIF</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Image Size</label>
                                <div class="col-sm-4">
                                    <input type="number" name="upload_setting[previewSettings][image][size]" class="form-control">
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
                                    <input type="number" name="upload_setting[previewSettings][image][maxFileCount]" class="form-control">
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
                                    <input type="checkbox" name="upload_setting[allowedFileTypes][]" value="video" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Video extensions</label>
                                <div class="col-sm-9">
                                    <select class="extensions-multiple" name="upload_setting[allowedFileExtensions][]" multiple="multiple">
                                        <option value="AVI">AVI</option>
                                        <option value="MP4">MP4</option>
                                        <option value="Mov">Mov</option>
                                        <option value="Mkv">Mkv</option>
                                    </select>
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
                                    <input type="checkbox" name="upload_setting[allowedFileTypes][]" value="audio" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Music extensions</label>
                                <div class="col-sm-9">
                                    <select class="extensions-multiple" name="upload_setting[allowedFileExtensions][]" multiple="multiple">
                                        <option value="mp3">mp3</option>
                                        <option value="m4a">m4a</option>
                                        <option value="mv3">mv3</option>
                                    </select>
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
                                    <input type="checkbox" name="upload_setting[allowedFileTypes][]" value="text" class="checkClick">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 checkBlock">
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">Docs extensions</label>
                                <div class="col-sm-9">
                                    <select class="extensions-multiple" name="upload_setting[allowedFileExtensions][]" multiple="multiple">
                                        <option value="pdf">pdf</option>
                                        <option value="ZIP">ZIP</option>
                                        <option value="txt">txt</option>
                                        <option value="docx">docx</option>
                                    </select>
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
{!! BBstyle($_this->path.DS.'css'.DS.'select2.min.css') !!}
{!! HTML::style('public/css/font-awesome/css/fontawesome-iconpicker.min.css') !!}
{!! HTML::script('public/css/font-awesome/js/fontawesome-iconpicker.min.js') !!}
{!! BBscript($_this->path.DS.'js'.DS.'select2.min.js') !!}
<script>
    $('.icpp').iconpicker();
    $( document ).ready(function() {
        $('.extensions-multiple').select2();
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